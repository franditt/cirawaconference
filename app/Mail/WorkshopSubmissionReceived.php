<?php

namespace App\Mail;

use App\Models\WorkshopSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WorkshopSubmissionReceived extends Mailable
{
    use Queueable, SerializesModels;

    public WorkshopSubmission $submission;

    public function __construct(WorkshopSubmission $submission)
    {
        $this->submission = $submission;
    }

    public function build(): self
    {
        return $this
            ->subject('CIRAWA Conference 2026 — Submission Received')
            ->bcc('info@cirawaconference.org')
            ->view('emails.workshop_submission_received');
    }
}
