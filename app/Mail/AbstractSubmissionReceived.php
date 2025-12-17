<?php

namespace App\Mail;

use App\Models\AbstractSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AbstractSubmissionReceived extends Mailable
{
    use Queueable, SerializesModels;

    public AbstractSubmission $submission;

    public function __construct(AbstractSubmission $submission)
    {
        $this->submission = $submission;
    }

    public function build(): self
    {
        return $this
            ->subject('CIRAWA Conference 2026 — Submission Received')
            ->bcc('info@cirawaconference.org')
            ->view('emails.abstract_submission_received');
    }
}
