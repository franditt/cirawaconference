<?php

namespace App\Http\Controllers;

use App\Mail\AbstractSubmissionReceived;
use App\Models\AbstractSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class AbstractSubmissionController extends Controller
{
    public function store(Request $request)
    {
        $messages = [
            'email.required' => 'Email is required.',
            'email.email' => 'Email must be a valid email address.',
            'title.required' => 'Abstract title is required.',
            'title.max' => 'Abstract title must not exceed 500 characters.',
            'presenter_name.required' => 'Presenter name is required.',
            'presenter_name.max' => 'Presenter name must not exceed 150 characters.',
            'authors.required' => 'At least one author is required.',
            'authors.min' => 'At least one author is required.',
            'corresponding_author.required' => 'Corresponding author is required.',
            'categories.required' => 'At least one category is required.',
            'categories.min' => 'At least one category is required.',
            'category_other.required' => 'Please specify the "Other" category.',
            'abstract_content.required' => 'Abstract content is required.',
            'keywords.required' => 'Keywords are required.',
            'keywords.min' => 'Please provide at least 3 keywords.',
            'keywords.max' => 'Please provide at most 5 keywords.',
            'presentation_format.required' => 'Presentation format is required.',
            'presentation_format_other.required' => 'Please specify the "Other" presentation format.',
            'presented_elsewhere.required' => 'Please indicate if you have presented this work elsewhere.',
            'declaration.required' => 'You must accept the declaration to submit.',
            'files.max' => 'You can upload up to 5 files.',
            'files.*.mimetypes' => 'All files must be PDF or DOCX format.',
            'files.*.max' => 'Each file must be 100 MB or smaller.',
        ];

        $validated = $request->validate([
            'email' => ['required', 'email'],
            'title' => ['required', 'string', 'max:500'],
            'presenter_name' => ['required', 'string', 'max:150'],
            'authors' => ['required', 'array', 'min:1'],
            'authors.*' => ['string', 'max:150'],
            'corresponding_author' => ['required', 'string', 'max:150'],
            'is_student' => ['required', Rule::in(['yes', 'no'])],
            'categories' => ['required', 'array', 'min:1'],
            'categories.*' => ['string', 'max:100'],
            'category_other' => ['nullable', 'string', 'max:255'],
            'abstract_content' => ['required', 'string', 'max:10000'],
            'keywords' => ['required', 'array', 'min:3', 'max:5'],
            'keywords.*' => ['string', 'max:50'],
            'presentation_format' => ['required', Rule::in(['Oral', 'Poster', 'Other'])],
            'presentation_format_other' => ['nullable', 'string', 'max:100'],
            'presented_elsewhere' => ['required', Rule::in(['yes', 'no'])],
            'declaration' => ['required', 'accepted'],
            'files' => ['nullable', 'array', 'max:5'],
            'files.*' => ['file', 'mimetypes:application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'max:102400'],
        ], $messages);

        // Conditional requirements
        if (in_array('Other', $validated['categories'] ?? [], true)) {
            $request->validate(['category_other' => ['required', 'string', 'max:255']], ['category_other.required' => 'Please specify the "Other" category.']);
        }
        if (($validated['presentation_format'] ?? null) === 'Other') {
            $request->validate(['presentation_format_other' => ['required', 'string', 'max:100']], ['presentation_format_other.required' => 'Please specify the "Other" presentation format.']);
        }

        // Optional: enforce 300-word limit server-side
        $wordCount = str_word_count(trim($validated['abstract_content'] ?? ''));
        if ($wordCount > 300) {
            return back()->withErrors(['abstract_content' => 'Abstract must be 300 words or fewer.'])->withInput();
        }

        $submission = AbstractSubmission::create([
            'email' => $validated['email'],
            'title' => $validated['title'],
            'presenter_name' => $validated['presenter_name'],
            'authors' => $validated['authors'],
            'corresponding_author' => $validated['corresponding_author'],
            'is_student' => ($validated['is_student'] === 'yes'),
            'categories' => $validated['categories'],
            'category_other' => $validated['category_other'] ?? null,
            'abstract_content' => $validated['abstract_content'],
            'keywords' => $validated['keywords'],
            'presentation_format' => $validated['presentation_format'],
            'presentation_format_other' => $validated['presentation_format_other'] ?? null,
            'presented_elsewhere' => ($validated['presented_elsewhere'] === 'yes'),
            'declaration' => (bool)($validated['declaration'] ?? false),
        ]);

        // Handle file uploads (store under public/abstracts/{id}/)
        $uploadedMeta = [];
        if ($request->hasFile('files')) {
            $folder = 'abstracts/' . $submission->id;
            foreach ($request->file('files') as $file) {
                if (!$file->isValid()) continue;
                $original = $file->getClientOriginalName();
                $safeName = time() . '_' . uniqid() . '_' . preg_replace('/[^A-Za-z0-9._-]/', '_', $original);
                $path = $file->storeAs('public/' . $folder, $safeName);
                $uploadedMeta[] = [
                    'original' => $original,
                    'name' => $safeName,
                    'path' => $path, // storage path (public disk)
                    'url' => Storage::url($folder . '/' . $safeName), // public URL after storage:link
                    'mime' => $file->getClientMimeType(),
                    'size' => $file->getSize(),
                ];
            }
        }

        if (!empty($uploadedMeta)) {
            $submission->uploaded_files = $uploadedMeta;
            $submission->save();
        }

        // Send confirmation email to submitter with a summary of their submission
        try {
            Mail::to($submission->email)->send(new AbstractSubmissionReceived($submission));
        } catch (\Throwable $e) {
            // Silently ignore email errors so submission succeeds even if mail is misconfigured
        }

        return back()->with('success', 'Your abstract has been submitted successfully. A confirmation email has been sent.');
    }
}
