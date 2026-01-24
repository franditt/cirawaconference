<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 0;
        }
        .header {
            background: linear-gradient(135deg, #2c5f2d 0%, #97bc62 100%);
            color: white;
            padding: 2rem;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 1.5rem;
        }
        .content {
            padding: 2rem;
        }
        .content h2 {
            color: #2c5f2d;
            font-size: 1.25rem;
            margin-top: 0;
        }
        .info-section {
            background: #f9fafb;
            padding: 1.5rem;
            border-radius: 6px;
            margin: 1.5rem 0;
        }
        .info-section h3 {
            color: #2c5f2d;
            font-size: 1.1rem;
            margin-top: 0;
            margin-bottom: 1rem;
        }
        .info-row {
            display: flex;
            padding: 0.5rem 0;
            border-bottom: 1px solid #e5e7eb;
        }
        .info-row:last-child {
            border-bottom: none;
        }
        .info-label {
            font-weight: 600;
            width: 40%;
            color: #4b5563;
        }
        .info-value {
            width: 60%;
            color: #1f2937;
        }
        .conference-details {
            background: #eff6ff;
            border-left: 4px solid #3b82f6;
            padding: 1.5rem;
            margin: 1.5rem 0;
        }
        .next-steps {
            background: #f0fdf4;
            border-left: 4px solid #22c55e;
            padding: 1.5rem;
            margin: 1.5rem 0;
        }
        .next-steps ul {
            margin: 0.5rem 0 0 1.5rem;
            padding: 0;
        }
        .next-steps li {
            margin: 0.5rem 0;
        }
        .footer {
            background: #f9fafb;
            padding: 1.5rem 2rem;
            text-align: center;
            color: #6b7280;
            font-size: 0.875rem;
        }
        .button {
            display: inline-block;
            background: linear-gradient(135deg, #2c5f2d 0%, #97bc62 100%);
            color: white !important;
            padding: 0.75rem 2rem;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            margin: 1rem 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Registration Confirmation</h1>
            <p style="margin: 0.5rem 0 0 0;">CIRAWA Conference 2026</p>
        </div>

        <div class="content">
            <h2>Dear {{ $registration->full_name }},</h2>

            <p>Thank you for registering for the CIRAWA Conference 2026. We are pleased to confirm that your registration has been successfully received.</p>

            <div class="conference-details">
                <h3 style="margin-top: 0; color: #1e40af;">Conference Details</h3>
                <p style="margin: 0;"><strong>Theme:</strong> Agroecology and Nature-Based Solutions for Sustainable Food Systems in Africa</p>
                <p style="margin: 0.5rem 0 0 0;"><strong>Dates:</strong> 1–3 July 2026</p>
                <p style="margin: 0.5rem 0 0 0;"><strong>Venue:</strong> The Palms Hotel, Accra, Ghana</p>
            </div>

            <div class="info-section">
                <h3>Your Registration Details</h3>
                
                <div class="info-row">
                    <div class="info-label">Full Name:</div>
                    <div class="info-value">{{ $registration->full_name }}</div>
                </div>
                <div class="info-row">
                    <div class="info-label">Email:</div>
                    <div class="info-value">{{ $registration->email }}</div>
                </div>
                <div class="info-row">
                    <div class="info-label">Organization:</div>
                    <div class="info-value">{{ $registration->organization }}</div>
                </div>
                <div class="info-row">
                    <div class="info-label">Participation Mode:</div>
                    <div class="info-value">{{ $registration->participation_mode }}</div>
                </div>
                <div class="info-row">
                    <div class="info-label">Category:</div>
                    <div class="info-value">{{ $registration->participant_category }}</div>
                </div>
                <div class="info-row">
                    <div class="info-label">Registration Fee:</div>
                    <div class="info-value">{{ $registration->registration_category }}</div>
                </div>
                <div class="info-row">
                    <div class="info-label">Payment Method:</div>
                    <div class="info-value">{{ $registration->payment_method }}</div>
                </div>
            </div>

            <div class="next-steps">
                <h3 style="margin-top: 0; color: #166534;">Next Steps</h3>
                <ul>
                    <li><strong>Payment:</strong> Please complete your registration payment using your selected payment method. Payment details will be sent to you in a separate email.</li>
                    @if($registration->requires_visa)
                    <li><strong>Visa:</strong> You indicated that you require a visa. Please note that visa costs and processing are borne by the participant. We will provide a support letter upon request.</li>
                    @endif
                    @if($registration->requires_accommodation)
                    <li><strong>Accommodation:</strong> Our team will contact you separately regarding accommodation arrangements.</li>
                    @endif
                    <li><strong>Conference Updates:</strong> You will receive further information about the conference program, schedule, and logistics as we approach the event.</li>
                </ul>
            </div>

            <p>If you have any questions or need to make changes to your registration, please don't hesitate to contact us.</p>

            <p style="margin-top: 2rem;">
                <strong>We look forward to welcoming you to Accra in July 2026!</strong>
            </p>

            <p style="margin-top: 2rem;">
                Best regards,<br>
                <strong>CIRAWA Conference Organizing Committee</strong>
            </p>
        </div>

        <div class="footer">
            <p style="margin: 0;">CIRAWA Conference 2026</p>
            <p style="margin: 0.5rem 0;">Email: info@cirawa.org | Website: www.cirawa.org</p>
            <p style="margin: 0.5rem 0 0 0;">This is an automated email. Please do not reply directly to this message.</p>
        </div>
    </div>
</body>
</html>
