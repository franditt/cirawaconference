<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Conference Registration - CIRAWA 2026</title>
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
            padding: 2rem 1rem;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #2c5f2d 0%, #97bc62 100%);
            color: white;
            padding: 3rem 2rem;
            text-align: center;
        }
        .header h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }
        .header .subtitle {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        .header .details {
            font-size: 0.95rem;
            opacity: 0.95;
        }
        .form-container {
            padding: 2.5rem;
        }
        .section {
            margin-bottom: 2.5rem;
            padding-bottom: 2rem;
            border-bottom: 2px solid #e5e7eb;
        }
        .section:last-child {
            border-bottom: none;
        }
        .section-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #2c5f2d;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 3px solid #97bc62;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        label {
            display: block;
            font-weight: 600;
            color: #374151;
            margin-bottom: 0.5rem;
        }
        label .required {
            color: #dc2626;
            margin-left: 0.25rem;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #d1d5db;
            border-radius: 6px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #2c5f2d;
            box-shadow: 0 0 0 3px rgba(44, 95, 45, 0.1);
        }
        textarea {
            resize: vertical;
            min-height: 100px;
        }
        .radio-group,
        .checkbox-group {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }
        .radio-item,
        .checkbox-item {
            display: flex;
            align-items: center;
            padding: 0.75rem;
            border: 2px solid #e5e7eb;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .radio-item:hover,
        .checkbox-item:hover {
            background: #f9fafb;
            border-color: #97bc62;
        }
        .radio-item input[type="radio"],
        .checkbox-item input[type="checkbox"] {
            margin-right: 0.75rem;
            width: 18px;
            height: 18px;
            cursor: pointer;
        }
        .submit-btn {
            width: 100%;
            background: linear-gradient(135deg, #2c5f2d 0%, #97bc62 100%);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 6px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 2rem;
        }
        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(44, 95, 45, 0.3);
        }
        .error {
            color: #dc2626;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
        .note {
            background: #fef3c7;
            border-left: 4px solid #f59e0b;
            padding: 1rem;
            margin: 1rem 0;
            border-radius: 4px;
            font-size: 0.9rem;
        }
        @media (max-width: 768px) {
            .header h1 {
                font-size: 1.5rem;
            }
            .form-container {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Conference Registration</h1>
            <div class="subtitle">Agroecology and Nature-Based Solutions for Sustainable Food Systems in Africa</div>
            <div class="details">
                <div><strong>Dates:</strong> 1–3 July 2026</div>
                <div><strong>Venue:</strong> The Palms Hotel, Accra, Ghana</div>
            </div>
        </div>

        <div class="form-container">
            @if ($errors->any())
                <div style="background: #fee2e2; border-left: 4px solid #dc2626; padding: 1rem; margin-bottom: 2rem; border-radius: 4px;">
                    <strong style="color: #991b1b;">Please correct the following errors:</strong>
                    <ul style="margin-top: 0.5rem; margin-left: 1.5rem;">
                        @foreach ($errors->all() as $error)
                            <li style="color: #991b1b;">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register.store') }}">
                @csrf

                <!-- SECTION A: Personal Information -->
                <div class="section">
                    <h2 class="section-title">SECTION A: Personal Information</h2>

                    <div class="form-group">
                        <label for="full_name">Full Name <span class="required">*</span></label>
                        <input type="text" id="full_name" name="full_name" value="{{ old('full_name') }}" required>
                        @error('full_name')<div class="error">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <label>Gender <span class="required">*</span></label>
                        <div class="radio-group">
                            <label class="radio-item">
                                <input type="radio" name="gender" value="Male" {{ old('gender') == 'Male' ? 'checked' : '' }} required>
                                <span>Male</span>
                            </label>
                            <label class="radio-item">
                                <input type="radio" name="gender" value="Female" {{ old('gender') == 'Female' ? 'checked' : '' }} required>
                                <span>Female</span>
                            </label>
                            <label class="radio-item">
                                <input type="radio" name="gender" value="Prefer not to say" {{ old('gender') == 'Prefer not to say' ? 'checked' : '' }} required>
                                <span>Prefer not to say</span>
                            </label>
                        </div>
                        @error('gender')<div class="error">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <label for="nationality">Nationality <span class="required">*</span></label>
                        <select id="nationality" name="nationality" required>
                            <option value="">Select your nationality</option>
                            @foreach(['Afghanistan', 'Albania', 'Algeria', 'Andorra', 'Angola', 'Argentina', 'Armenia', 'Australia', 'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Brazil', 'Brunei', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Central African Republic', 'Chad', 'Chile', 'China', 'Colombia', 'Comoros', 'Congo', 'Costa Rica', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic', 'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic', 'East Timor', 'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia', 'Fiji', 'Finland', 'France', 'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Greece', 'Grenada', 'Guatemala', 'Guinea', 'Guinea-Bissau', 'Guyana', 'Haiti', 'Honduras', 'Hungary', 'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Israel', 'Italy', 'Ivory Coast', 'Jamaica', 'Japan', 'Jordan', 'Kazakhstan', 'Kenya', 'Kiribati', 'Kuwait', 'Kyrgyzstan', 'Laos', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libya', 'Liechtenstein', 'Lithuania', 'Luxembourg', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Mauritania', 'Mauritius', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Morocco', 'Mozambique', 'Myanmar', 'Namibia', 'Nauru', 'Nepal', 'Netherlands', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'North Korea', 'North Macedonia', 'Norway', 'Oman', 'Pakistan', 'Palau', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Poland', 'Portugal', 'Qatar', 'Romania', 'Russia', 'Rwanda', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Korea', 'South Sudan', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Sweden', 'Switzerland', 'Syria', 'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Togo', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Tuvalu', 'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States', 'Uruguay', 'Uzbekistan', 'Vanuatu', 'Vatican City', 'Venezuela', 'Vietnam', 'Yemen', 'Zambia', 'Zimbabwe'] as $country)
                                <option value="{{ $country }}" {{ old('nationality') == $country ? 'selected' : '' }}>{{ $country }}</option>
                            @endforeach
                        </select>
                        @error('nationality')<div class="error">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <label for="country_of_residence">Country of Residence <span class="required">*</span></label>
                        <select id="country_of_residence" name="country_of_residence" required>
                            <option value="">Select your country of residence</option>
                            @foreach(['Afghanistan', 'Albania', 'Algeria', 'Andorra', 'Angola', 'Argentina', 'Armenia', 'Australia', 'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Brazil', 'Brunei', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Central African Republic', 'Chad', 'Chile', 'China', 'Colombia', 'Comoros', 'Congo', 'Costa Rica', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic', 'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic', 'East Timor', 'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia', 'Fiji', 'Finland', 'France', 'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Greece', 'Grenada', 'Guatemala', 'Guinea', 'Guinea-Bissau', 'Guyana', 'Haiti', 'Honduras', 'Hungary', 'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Israel', 'Italy', 'Ivory Coast', 'Jamaica', 'Japan', 'Jordan', 'Kazakhstan', 'Kenya', 'Kiribati', 'Kuwait', 'Kyrgyzstan', 'Laos', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libya', 'Liechtenstein', 'Lithuania', 'Luxembourg', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Mauritania', 'Mauritius', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Morocco', 'Mozambique', 'Myanmar', 'Namibia', 'Nauru', 'Nepal', 'Netherlands', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'North Korea', 'North Macedonia', 'Norway', 'Oman', 'Pakistan', 'Palau', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Poland', 'Portugal', 'Qatar', 'Romania', 'Russia', 'Rwanda', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Korea', 'South Sudan', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Sweden', 'Switzerland', 'Syria', 'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Togo', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Tuvalu', 'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States', 'Uruguay', 'Uzbekistan', 'Vanuatu', 'Vatican City', 'Venezuela', 'Vietnam', 'Yemen', 'Zambia', 'Zimbabwe'] as $country)
                                <option value="{{ $country }}" {{ old('country_of_residence') == $country ? 'selected' : '' }}>{{ $country }}</option>
                            @endforeach
                        </select>
                        @error('country_of_residence')<div class="error">{{ $message }}</div>@enderror
                    </div>
                </div>

                <!-- SECTION B: Contact Details -->
                <div class="section">
                    <h2 class="section-title">SECTION B: Contact Details</h2>

                    <div class="form-group">
                        <label for="email">Email Address <span class="required">*</span></label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email')<div class="error">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <label for="phone_number">Phone Number (including country code) <span class="required">*</span></label>
                        <input type="tel" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" placeholder="+233 XX XXX XXXX" required>
                        @error('phone_number')<div class="error">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <label for="organization">Organization / Institution <span class="required">*</span></label>
                        <input type="text" id="organization" name="organization" value="{{ old('organization') }}" required>
                        @error('organization')<div class="error">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <label for="position">Position / Role <span class="required">*</span></label>
                        <input type="text" id="position" name="position" value="{{ old('position') }}" required>
                        @error('position')<div class="error">{{ $message }}</div>@enderror
                    </div>
                </div>

                <!-- SECTION C: Participant Category -->
                <div class="section">
                    <h2 class="section-title">SECTION C: Participant Category</h2>

                    <div class="form-group">
                        <label>Select your category <span class="required">*</span></label>
                        <div class="radio-group">
                            @foreach(['Researcher / Academic', 'Farmer / Farmer Organization', 'Extension Officer', 'Policy Maker / Government Institution', 'Civil Society / NGO', 'Private Sector / Business', 'Student', 'Development Partner / Donor', 'Other'] as $category)
                                <label class="radio-item">
                                    <input type="radio" name="participant_category" value="{{ $category }}" {{ old('participant_category') == $category ? 'checked' : '' }} required>
                                    <span>{{ $category }}</span>
                                </label>
                            @endforeach
                        </div>
                        @error('participant_category')<div class="error">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group" id="other_category_group" style="display: none;">
                        <label for="participant_category_other">Please specify</label>
                        <input type="text" id="participant_category_other" name="participant_category_other" value="{{ old('participant_category_other') }}">
                    </div>
                </div>

                <!-- SECTION D: Conference Participation -->
                <div class="section">
                    <h2 class="section-title">SECTION D: Conference Participation</h2>

                    <div class="form-group">
                        <label>How will you participate? <span class="required">*</span></label>
                        <div class="radio-group">
                            <label class="radio-item">
                                <input type="radio" name="participation_mode" value="Physical" {{ old('participation_mode') == 'Physical' ? 'checked' : '' }} required>
                                <span>Physical (in-person)</span>
                            </label>
                            <label class="radio-item">
                                <input type="radio" name="participation_mode" value="Virtual" {{ old('participation_mode') == 'Virtual' ? 'checked' : '' }} required>
                                <span>Virtual (online)</span>
                            </label>
                        </div>
                        @error('participation_mode')<div class="error">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <label>Days you plan to attend (Select all that apply) <span class="required">*</span></label>
                        <div class="checkbox-group">
                            @foreach(['Day 1 – Research & Civil Society', 'Day 2 – Research & Policy', 'Day 3 – Farmer Engagement & Field Activities'] as $day)
                                <label class="checkbox-item">
                                    <input type="checkbox" name="days_to_attend[]" value="{{ $day }}" {{ is_array(old('days_to_attend')) && in_array($day, old('days_to_attend')) ? 'checked' : '' }}>
                                    <span>{{ $day }}</span>
                                </label>
                            @endforeach
                        </div>
                        @error('days_to_attend')<div class="error">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <label>Are you presenting at the conference? <span class="required">*</span></label>
                        <div class="radio-group">
                            <label class="radio-item">
                                <input type="radio" name="presenting" value="Yes – Oral presentation" {{ old('presenting') == 'Yes – Oral presentation' ? 'checked' : '' }} required>
                                <span>Yes – Oral presentation</span>
                            </label>
                            <label class="radio-item">
                                <input type="radio" name="presenting" value="Yes – Poster presentation" {{ old('presenting') == 'Yes – Poster presentation' ? 'checked' : '' }} required>
                                <span>Yes – Poster presentation</span>
                            </label>
                            <label class="radio-item">
                                <input type="radio" name="presenting" value="No" {{ old('presenting') == 'No' ? 'checked' : '' }} required>
                                <span>No</span>
                            </label>
                        </div>
                        @error('presenting')<div class="error">{{ $message }}</div>@enderror
                    </div>
                </div>

                <!-- SECTION E: Areas of Interest -->
                <div class="section">
                    <h2 class="section-title">SECTION E: Areas of Interest</h2>

                    <div class="form-group">
                        <label>Please select your main areas of interest (Select up to 3) <span class="required">*</span></label>
                        <div class="checkbox-group">
                            @foreach(['Agroecology and climate resilience', 'Nature-based solutions in agriculture', 'Seed systems and biodiversity', 'Soil health and sustainable land management', 'Water management and nature-based solutions', 'Farmer-led innovation', 'Gender and youth in agroecology', 'Policy, governance, and scaling agroecology', 'Digital tools and innovation communication', 'Agroecology and livelihoods'] as $interest)
                                <label class="checkbox-item">
                                    <input type="checkbox" name="areas_of_interest[]" value="{{ $interest }}" {{ is_array(old('areas_of_interest')) && in_array($interest, old('areas_of_interest')) ? 'checked' : '' }}>
                                    <span>{{ $interest }}</span>
                                </label>
                            @endforeach
                        </div>
                        @error('areas_of_interest')<div class="error">{{ $message }}</div>@enderror
                    </div>
                </div>

                <!-- SECTION F: Registration Fee & Payment -->
                <div class="section">
                    <h2 class="section-title">SECTION F: Registration Fee & Payment</h2>

                    <div class="note">
                        <strong>Note:</strong> Registration fees cover conference materials, refreshments, and participation in all sessions. Field visits are subject to availability.
                    </div>

                    <div class="form-group">
                        <label>Registration Category & Fee <span class="required">*</span></label>
                        <div class="radio-group">
                            <label class="radio-item">
                                <input type="radio" name="registration_category" value="Student / Farmer" {{ old('registration_category') == 'Student / Farmer' ? 'checked' : '' }} required>
                                <span>Student / Farmer – GHS ___ / USD ___</span>
                            </label>
                            <label class="radio-item">
                                <input type="radio" name="registration_category" value="Researcher / Academic / Extension Officer" {{ old('registration_category') == 'Researcher / Academic / Extension Officer' ? 'checked' : '' }} required>
                                <span>Researcher / Academic / Extension Officer – GHS ___ / USD ___</span>
                            </label>
                            <label class="radio-item">
                                <input type="radio" name="registration_category" value="NGO / Civil Society / Private Sector" {{ old('registration_category') == 'NGO / Civil Society / Private Sector' ? 'checked' : '' }} required>
                                <span>NGO / Civil Society / Private Sector – GHS ___ / USD ___</span>
                            </label>
                            <label class="radio-item">
                                <input type="radio" name="registration_category" value="Policy Maker / Government Institution" {{ old('registration_category') == 'Policy Maker / Government Institution' ? 'checked' : '' }} required>
                                <span>Policy Maker / Government Institution – GHS ___ / USD ___</span>
                            </label>
                            <label class="radio-item">
                                <input type="radio" name="registration_category" value="Virtual Participant" {{ old('registration_category') == 'Virtual Participant' ? 'checked' : '' }} required>
                                <span>Virtual Participant – GHS ___ / USD ___</span>
                            </label>
                        </div>
                        @error('registration_category')<div class="error">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <label>Payment Method <span class="required">*</span></label>
                        <div class="radio-group">
                            <label class="radio-item">
                                <input type="radio" name="payment_method" value="Mobile Money (MTN / Vodafone / AirtelTigo)" {{ old('payment_method') == 'Mobile Money (MTN / Vodafone / AirtelTigo)' ? 'checked' : '' }} required>
                                <span>Mobile Money (MTN / Vodafone / AirtelTigo)</span>
                            </label>
                            <label class="radio-item">
                                <input type="radio" name="payment_method" value="Bank Transfer" {{ old('payment_method') == 'Bank Transfer' ? 'checked' : '' }} required>
                                <span>Bank Transfer</span>
                            </label>
                            <label class="radio-item">
                                <input type="radio" name="payment_method" value="Debit / Credit Card" {{ old('payment_method') == 'Debit / Credit Card' ? 'checked' : '' }} required>
                                <span>Debit / Credit Card</span>
                            </label>
                            <label class="radio-item">
                                <input type="radio" name="payment_method" value="Sponsored / Fee Waived" {{ old('payment_method') == 'Sponsored / Fee Waived' ? 'checked' : '' }} required>
                                <span>Sponsored / Fee Waived</span>
                            </label>
                        </div>
                        @error('payment_method')<div class="error">{{ $message }}</div>@enderror
                    </div>
                </div>

                <!-- SECTION G: Logistics & Accessibility -->
                <div class="section">
                    <h2 class="section-title">SECTION G: Logistics & Accessibility</h2>

                    <div class="form-group">
                        <label>Do you require a Visa? <span class="required">*</span></label>
                        <div style="font-size: 0.9rem; color: #6b7280; margin-bottom: 0.5rem;">Cost of Visa and visa processing are borne by participant</div>
                        <div class="radio-group">
                            <label class="radio-item">
                                <input type="radio" name="requires_visa" value="1" {{ old('requires_visa') == '1' ? 'checked' : '' }} required>
                                <span>Yes</span>
                            </label>
                            <label class="radio-item">
                                <input type="radio" name="requires_visa" value="0" {{ old('requires_visa') == '0' ? 'checked' : '' }} required>
                                <span>No</span>
                            </label>
                        </div>
                        @error('requires_visa')<div class="error">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <label>Will you require accommodation support? <span class="required">*</span></label>
                        <div style="font-size: 0.9rem; color: #6b7280; margin-bottom: 0.5rem;">Must be paid separately</div>
                        <div class="radio-group">
                            <label class="radio-item">
                                <input type="radio" name="requires_accommodation" value="1" {{ old('requires_accommodation') == '1' ? 'checked' : '' }} required>
                                <span>Yes</span>
                            </label>
                            <label class="radio-item">
                                <input type="radio" name="requires_accommodation" value="0" {{ old('requires_accommodation') == '0' ? 'checked' : '' }} required>
                                <span>No</span>
                            </label>
                        </div>
                        @error('requires_accommodation')<div class="error">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <label>Do you have any dietary requirements? <span class="required">*</span></label>
                        <div class="radio-group">
                            <label class="radio-item">
                                <input type="radio" name="dietary_requirements" value="None" {{ old('dietary_requirements') == 'None' ? 'checked' : '' }} required>
                                <span>None</span>
                            </label>
                            <label class="radio-item">
                                <input type="radio" name="dietary_requirements" value="Vegetarian" {{ old('dietary_requirements') == 'Vegetarian' ? 'checked' : '' }} required>
                                <span>Vegetarian</span>
                            </label>
                            <label class="radio-item">
                                <input type="radio" name="dietary_requirements" value="Vegan" {{ old('dietary_requirements') == 'Vegan' ? 'checked' : '' }} required>
                                <span>Vegan</span>
                            </label>
                            <label class="radio-item">
                                <input type="radio" name="dietary_requirements" value="Medical / Allergy" {{ old('dietary_requirements') == 'Medical / Allergy' ? 'checked' : '' }} required>
                                <span>Medical / Allergy (please specify below)</span>
                            </label>
                        </div>
                        @error('dietary_requirements')<div class="error">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group" id="dietary_details_group" style="display: none;">
                        <label for="dietary_requirements_details">Please specify your dietary requirements</label>
                        <textarea id="dietary_requirements_details" name="dietary_requirements_details">{{ old('dietary_requirements_details') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="accessibility_needs">Do you have any accessibility needs we should be aware of? (Optional)</label>
                        <textarea id="accessibility_needs" name="accessibility_needs">{{ old('accessibility_needs') }}</textarea>
                        @error('accessibility_needs')<div class="error">{{ $message }}</div>@enderror
                    </div>
                </div>

                <!-- SECTION H: Consent & Data Use -->
                <div class="section">
                    <h2 class="section-title">SECTION H: Consent & Data Use</h2>

                    <div class="form-group">
                        <label class="checkbox-item" style="border: 2px solid #d1d5db; padding: 1rem; border-radius: 6px;">
                            <input type="checkbox" name="consent_photography" value="1" {{ old('consent_photography') ? 'checked' : '' }} required>
                            <span><strong>Consent for Photography & Media</strong><br>I consent to being photographed or recorded during the conference for communication and reporting purposes. <span class="required">*</span></span>
                        </label>
                        @error('consent_photography')<div class="error">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <label class="checkbox-item" style="border: 2px solid #d1d5db; padding: 1rem; border-radius: 6px;">
                            <input type="checkbox" name="consent_data_protection" value="1" {{ old('consent_data_protection') ? 'checked' : '' }} required>
                            <span><strong>Data Protection Agreement</strong><br>I confirm that the information provided is accurate and agree to its use for conference organization, communication, and reporting in line with CIRAWA data protection standards. <span class="required">*</span></span>
                        </label>
                        @error('consent_data_protection')<div class="error">{{ $message }}</div>@enderror
                    </div>
                </div>

                <!-- SECTION I: Additional Information -->
                <div class="section">
                    <h2 class="section-title">SECTION I: Additional Information</h2>

                    <div class="form-group">
                        <label>How did you hear about the conference? <span class="required">*</span></label>
                        <div class="radio-group">
                            @foreach(['Website', 'Social media', 'Email invitation', 'Partner organization', 'Colleague / Friend', 'Other'] as $source)
                                <label class="radio-item">
                                    <input type="radio" name="how_heard" value="{{ $source }}" {{ old('how_heard') == $source ? 'checked' : '' }} required>
                                    <span>{{ $source }}</span>
                                </label>
                            @endforeach
                        </div>
                        @error('how_heard')<div class="error">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group" id="how_heard_other_group" style="display: none;">
                        <label for="how_heard_other">Please specify</label>
                        <input type="text" id="how_heard_other" name="how_heard_other" value="{{ old('how_heard_other') }}">
                    </div>

                    <div class="form-group">
                        <label for="additional_comments">Any additional comments or expectations from the conference? (Optional)</label>
                        <textarea id="additional_comments" name="additional_comments">{{ old('additional_comments') }}</textarea>
                        @error('additional_comments')<div class="error">{{ $message }}</div>@enderror
                    </div>
                </div>

                <button type="submit" class="submit-btn">Submit Registration</button>
            </form>
        </div>
    </div>

    <script>
        // Show/hide "Other" category field
        document.querySelectorAll('input[name="participant_category"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const otherGroup = document.getElementById('other_category_group');
                if (this.value === 'Other') {
                    otherGroup.style.display = 'block';
                } else {
                    otherGroup.style.display = 'none';
                }
            });
        });

        // Show/hide dietary details field
        document.querySelectorAll('input[name="dietary_requirements"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const detailsGroup = document.getElementById('dietary_details_group');
                if (this.value === 'Medical / Allergy') {
                    detailsGroup.style.display = 'block';
                } else {
                    detailsGroup.style.display = 'none';
                }
            });
        });

        // Show/hide "Other" source field
        document.querySelectorAll('input[name="how_heard"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const otherGroup = document.getElementById('how_heard_other_group');
                if (this.value === 'Other') {
                    otherGroup.style.display = 'block';
                } else {
                    otherGroup.style.display = 'none';
                }
            });
        });

        // Limit areas of interest selection to 3
        const interestCheckboxes = document.querySelectorAll('input[name="areas_of_interest[]"]');
        interestCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const checkedCount = document.querySelectorAll('input[name="areas_of_interest[]"]:checked').length;
                if (checkedCount >= 3) {
                    interestCheckboxes.forEach(cb => {
                        if (!cb.checked) {
                            cb.disabled = true;
                            cb.parentElement.style.opacity = '0.5';
                        }
                    });
                } else {
                    interestCheckboxes.forEach(cb => {
                        cb.disabled = false;
                        cb.parentElement.style.opacity = '1';
                    });
                }
            });
        });

        // Initialize conditional fields on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Check participant category
            const selectedCategory = document.querySelector('input[name="participant_category"]:checked');
            if (selectedCategory && selectedCategory.value === 'Other') {
                document.getElementById('other_category_group').style.display = 'block';
            }

            // Check dietary requirements
            const selectedDietary = document.querySelector('input[name="dietary_requirements"]:checked');
            if (selectedDietary && selectedDietary.value === 'Medical / Allergy') {
                document.getElementById('dietary_details_group').style.display = 'block';
            }

            // Check how heard
            const selectedHeard = document.querySelector('input[name="how_heard"]:checked');
            if (selectedHeard && selectedHeard.value === 'Other') {
                document.getElementById('how_heard_other_group').style.display = 'block';
            }

            // Initialize interest checkboxes
            const checkedCount = document.querySelectorAll('input[name="areas_of_interest[]"]:checked').length;
            if (checkedCount >= 3) {
                interestCheckboxes.forEach(cb => {
                    if (!cb.checked) {
                        cb.disabled = true;
                        cb.parentElement.style.opacity = '0.5';
                    }
                });
            }
        });
    </script>
</body>
</html>
