<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful - CIRAWA 2026</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }
        .container {
            max-width: 600px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 3rem;
            text-align: center;
        }
        .success-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #2c5f2d 0%, #97bc62 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            animation: scaleIn 0.5s ease-out;
        }
        @keyframes scaleIn {
            from {
                transform: scale(0);
            }
            to {
                transform: scale(1);
            }
        }
        .checkmark {
            width: 40px;
            height: 40px;
            border: 4px solid white;
            border-top: none;
            border-right: none;
            transform: rotate(-45deg);
            margin-top: -10px;
        }
        h1 {
            font-size: 2rem;
            color: #2c5f2d;
            margin-bottom: 1rem;
            font-weight: 700;
        }
        .message {
            font-size: 1.1rem;
            color: #4b5563;
            margin-bottom: 2rem;
            line-height: 1.8;
        }
        .info-box {
            background: #f0fdf4;
            border-left: 4px solid #22c55e;
            padding: 1.5rem;
            margin: 2rem 0;
            text-align: left;
            border-radius: 6px;
        }
        .info-box h3 {
            color: #166534;
            font-size: 1.1rem;
            margin-bottom: 0.75rem;
            font-weight: 600;
        }
        .info-box ul {
            list-style: none;
            padding: 0;
        }
        .info-box li {
            padding: 0.5rem 0;
            color: #166534;
        }
        .info-box li::before {
            content: "✓ ";
            color: #22c55e;
            font-weight: bold;
            margin-right: 0.5rem;
        }
        .btn {
            display: inline-block;
            background: linear-gradient(135deg, #2c5f2d 0%, #97bc62 100%);
            color: white;
            padding: 1rem 2rem;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(44, 95, 45, 0.3);
        }
        .footer-text {
            margin-top: 2rem;
            font-size: 0.9rem;
            color: #6b7280;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-icon">
            <div class="checkmark"></div>
        </div>

        <h1>Registration Successful!</h1>

        <p class="message">
            Thank you for registering for the CIRAWA Conference 2026. Your registration has been received and a confirmation email has been sent to your email address.
        </p>

        <div class="info-box">
            <h3>What happens next?</h3>
            <ul>
                <li>Check your email for registration confirmation and payment details</li>
                <li>Complete your payment using your selected payment method</li>
                <li>You will receive further information about the conference schedule</li>
                <li>If you selected accommodation support, we will contact you separately</li>
            </ul>
        </div>

        <div class="info-box">
            <h3>Conference Details</h3>
            <ul style="list-style: none; padding: 0;">
                <li style="padding: 0.25rem 0;"><strong>Theme:</strong> Agroecology and Nature-Based Solutions for Sustainable Food Systems in Africa</li>
                <li style="padding: 0.25rem 0;"><strong>Dates:</strong> 1–3 July 2026</li>
                <li style="padding: 0.25rem 0;"><strong>Venue:</strong> The Palms Hotel, Accra, Ghana</li>
            </ul>
        </div>

        <a href="/" class="btn">Return to Home</a>

        <p class="footer-text">
            If you have any questions, please contact us at info@cirawa.org
        </p>
    </div>
</body>
</html>
