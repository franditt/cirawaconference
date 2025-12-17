<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AbstractController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'title' => 'required|string|max:500',
            'presenter_name' => 'required|string|max:100',
            'authors' => 'required|array|min:1',
            'authors.*' => 'required|string|max:100',
            'corresponding_author' => 'required|string',
            'correspondence_email' => 'required|email',
            'is_student' => 'sometimes|nullable',
            'categories' => 'required|array|min:1',
            'category_other' => 'nullable|string|max:255',
            'abstract_content' => 'required|string',
            'keywords' => 'required|array|min:1|max:5',
            'keywords.*' => 'string|max:100',
            'presentation_format' => 'required|string',
            'presentation_other' => 'nullable|string|max:255',
            'presented_elsewhere' => 'required|in:yes,no',
            'declaration' => 'accepted',
            'files' => 'nullable|array|max:5',
            'files.*' => 'file|mimes:pdf,docx|max:102400',
        ]);

        // Enforce max 300 words for abstract content
        $wordCount = str_word_count(strip_tags($data['abstract_content']));
        if ($wordCount > 300) {
            return back()->withInput()->withErrors(['abstract_content' => 'Abstract must be 300 words or fewer. Currently: ' . $wordCount]);
        }

        // Prepare storage for files
        $storedFiles = [];
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                if ($file && $file->isValid()) {
                    $path = $file->store('public/abstracts');
                    $storedFiles[] = $path;
                }
            }
        }

        // Save submission record as JSON line (append)
        $record = [
            'submitted_at' => now()->toDateTimeString(),
            'data' => $data,
            'files' => $storedFiles,
            'ip' => $request->ip(),
        ];

        $json = json_encode($record, JSON_UNESCAPED_UNICODE);
        try {
            Storage::append('abstracts_submissions.jsonl', $json);
        } catch (\Exception $e) {
            // best-effort: if append fails, continue
        }

        return back()->with('success', 'Abstract submitted successfully.');
    }
}
