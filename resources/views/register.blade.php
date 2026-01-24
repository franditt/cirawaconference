<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CIRAWA Conference 2026 Registration</title>

    <link rel="icon" href="https://saadittoh.com/cirawa/tree.png">
    <link rel="apple-touch-icon" href="https://saadittoh.com/cirawa/tree.png">

    <!-- Open Graph (for WhatsApp/Facebook) -->
    <meta property="og:title" content="CIRAWA Conference 2026 Registration" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://saadittoh.com/cirawa/CIRAWA_logo.png" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="CIRAWA Conference 2026 Registration" />
    <meta property="og:description" content="Register for CIRAWA Conference 2026 - Agroecology and Nature-Based Solutions for Sustainable Food Systems in Africa" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="CIRAWA Conference 2026 Registration" />
    <meta name="twitter:image" content="https://saadittoh.com/cirawa/CIRAWA_logo.png" />
    <meta name="twitter:description" content="Register for CIRAWA Conference 2026 - Agroecology and Nature-Based Solutions for Sustainable Food Systems in Africa" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
    </style>
    <style>
        :root{--c-primary:#c74e2f;--c-accent:#7fbe9f;--c-white:#ffffff;--card-bg:#ffffff;--muted:#6b7280}
        body{font-family:Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;}
        .container{max-width:960px;margin:0 auto;padding:2rem}
        @media (max-width:640px) {
            .container{width:95vw;max-width:none;padding:1rem}
            .max-w-7xl{padding-left:0 !important;padding-right:0 !important}
        }
        .card{background:var(--card-bg);border-radius:12px;padding:1.5rem;box-shadow:0 8px 30px rgba(15,23,42,0.06)}
        h1{font-size:1.25rem;margin:0 0 .25rem}
        .lead{color:var(--muted);font-size:.95rem;margin-bottom:1rem}
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
            color: #0f172a;
            margin-bottom: 0.25rem;
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
            padding: 0.6rem 0.75rem;
            border: 1px solid #e6edf0;
            border-radius: 8px;
            background: #fbfdfe;
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
        .note {
            background: #fef3c7;
            border-left: 4px solid #f59e0b;
            padding: 1rem;
            margin: 1rem 0;
            border-radius: 4px;
            font-size: 0.9rem;
        }
        .btn{display:inline-flex;align-items:center;gap:.5rem;padding:.75rem 1.5rem;border-radius:8px;border:0;color:var(--c-white);cursor:pointer;font-weight:700;font-size:1rem}
        .btn-primary{background:var(--c-primary)}
        .muted{color:var(--muted);font-size:.9rem}
        .error {
            color: #b91c1c;
            font-size: 0.95rem;
            margin-top: 0.25rem;
        }
    </style>
</head>
<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <img src="https://cirawa.eu/wp-content/uploads/2023/03/CIRAWA_logo.svg" alt="CIRAWA logo" class="h-16 w-auto bg-gray-100" />
            </div>

            <!-- CIRAWA Conference 2026 Registration Form -->
            <div class="container">
                <div class="card">
                    <div style="display:flex;align-items:center;justify-content:space-between;gap:1rem;margin-bottom:1rem;">
                        <div style="display:flex;align-items:center;gap:1rem">
                            <img src="https://saadittoh.com/cirawa/tree.png" alt="CIRAWA" style="height:48px;">
                            <div>
                                <h1>CIRAWA Conference 2026 — Registration</h1>
                                <div class="lead">Agroecology and Nature-Based Solutions for Sustainable Food Systems in Africa<br>
                                <strong>1–3 July 2026</strong> | The Palms Hotel, Accra, Ghana</div>
                            </div>
                        </div>
                    </div>
                    @if($errors->any())
                        <div class="error" style="margin-bottom:1rem;background:#fef2f2;padding:1rem;border-radius:6px;border-left:4px solid #b91c1c">
                            <strong>Please fix the following errors:</strong>
                            <ul style="margin:0.5rem 0 0 1.5rem;padding:0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
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

                <div style="margin-top:1.25rem;display:flex;gap:1rem;justify-content:flex-end">
                    <button type="submit" class="btn btn-primary">Submit Registration</button>
                </div>
            </form>
                </div>
            </div>
        </div>

        <script>
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
