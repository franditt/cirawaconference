<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CIRAWA Conference 2026 — Submission Received</title>
</head>
<body style="font-family: Arial, sans-serif; color:#0f172a; max-width:800px; margin:0 auto; padding:20px;">
    <div style="text-align:center; margin-bottom:2rem;">
        <img src="https://cirawa.eu/wp-content/uploads/2023/03/CIRAWA_logo.svg" alt="CIRAWA" style="height:60px;">
    </div>
    <h2 style="margin-bottom:0.25rem;">CIRAWA Conference 2026 — Submission Received</h2>
    <p style="margin-top:0;">Thank you for submitting your abstract. Below is a copy of what we received.</p>

    <h3>Submission Details</h3>
    <ul>
        <li><strong>Title:</strong> {{ $submission->title }}</li>
        <li><strong>Presenter:</strong> {{ $submission->presenter_name }}</li>
        <li><strong>Email:</strong> {{ $submission->email }}</li>
        <li><strong>Authors:</strong> {{ implode(', ', $submission->authors ?? []) }}</li>
        <li><strong>Corresponding Author:</strong> {{ $submission->corresponding_author }}</li>
        <li><strong>Student:</strong> {{ $submission->is_student ? 'Yes' : 'No' }}</li>
        <li><strong>Categories:</strong> {{ implode(', ', $submission->categories ?? []) }} @if(!empty($submission->category_other)) (Other: {{ $submission->category_other }}) @endif</li>
        <li><strong>Keywords:</strong> {{ implode(', ', $submission->keywords ?? []) }}</li>
        <li><strong>Presentation Format:</strong> {{ $submission->presentation_format }} @if(!empty($submission->presentation_format_other)) ({{ $submission->presentation_format_other }}) @endif</li>
        <li><strong>Presented Elsewhere:</strong> {{ $submission->presented_elsewhere ? 'Yes' : 'No' }}</li>
    </ul>

    <h3>Abstract</h3>
    <p style="white-space:pre-wrap;">{{ $submission->abstract_content }}</p>

    @if(!empty($submission->uploaded_files))
        <h3>Uploaded Files</h3>
        <ul>
            @foreach(($submission->uploaded_files ?? []) as $file)
                <li>{{ $file['original'] ?? $file['name'] ?? 'File' }}</li>
            @endforeach
        </ul>
    @endif

    <p style="margin-top:1.5rem;">If you have questions, please reply to this email.</p>
</body>
</html>
