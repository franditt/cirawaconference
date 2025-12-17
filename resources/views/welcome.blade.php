<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
            .card{background:var(--card-bg);border-radius:12px;padding:1.5rem;box-shadow:0 8px 30px rgba(15,23,42,0.06)}
            h1{font-size:1.25rem;margin:0 0 .25rem}
            .lead{color:var(--muted);font-size:.95rem;margin-bottom:1rem}
            label{display:block;font-weight:600;margin-bottom:.25rem;color:#0f172a}
            .row{display:grid;grid-template-columns:repeat(1,1fr);gap:1rem}
            @media(min-width:768px){.row.two{grid-template-columns:repeat(2,1fr)} }
            input[type=text],input[type=email],select,textarea{width:100%;padding:.6rem .75rem;border:1px solid #e6edf0;border-radius:8px;background:#fbfdfe}
            textarea{min-height:120px}
            .muted{color:var(--muted);font-size:.9rem}
            .btn{display:inline-flex;align-items:center;gap:.5rem;padding:.6rem 1rem;border-radius:8px;border:0;color:var(--c-white);cursor:pointer;font-weight:700}
            .btn-primary{background:var(--c-primary)}
            .btn-accent{background:var(--c-accent);color:#083827}
            .chips{display:flex;flex-wrap:wrap;gap:.5rem}
            .chip{background:#f3f8f6;padding:.35rem .6rem;border-radius:999px;border:1px solid rgba(0,0,0,0.04);display:inline-flex;align-items:center;gap:.5rem}
            .chip button{background:transparent;border:0;cursor:pointer;color:#777}
            .authors-list .item{display:flex;align-items:center;gap:.5rem}
            .field-note{font-size:.85rem;color:var(--muted)}
            .error{color:#b91c1c;font-size:.95rem}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <img src="https://cirawa.eu/wp-content/uploads/2023/03/CIRAWA_logo.svg" alt="CIRAWA logo" class="h-16 w-auto bg-gray-100" />
                </div>

                

                <!-- CIRAWA Conference 2026 Abstract Submission Form -->
                <div class="container">
                    <div class="card">
                        <div style="display:flex;align-items:center;justify-content:space-between;gap:1rem;margin-bottom:1rem;">
                            <div style="display:flex;align-items:center;gap:1rem">
                                <img src="https://cirawa.eu/wp-content/uploads/2023/03/CIRAWA_logo.svg" alt="CIRAWA" style="height:48px;">
                                <div>
                                    <h1>CIRAWA Conference 2026 — Abstract Submission</h1>
                                    <div class="lead">Please complete this form to submit your abstract for consideration.</div>
                                </div>
                            </div>
                        </div>

                        @if(session('success'))
                            <div class="field-note" style="margin-bottom:1rem;color:green">{{ session('success') }}</div>
                        @endif

                        @if($errors->any())
                            <div class="error" style="margin-bottom:1rem">Please fix the highlighted errors and try again.</div>
                        @endif

                        <form action="{{ route('abstracts.submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row two">
                                <div>
                                    <label>Email (required)</label>
                                    <input type="email" name="email" required value="{{ old('email') }}">
                                </div>
                                <div>
                                    <label>Abstract Title (required)</label>
                                    <input type="text" name="title" maxlength="500" required value="{{ old('title') }}">
                                </div>
                            </div>

                            <div class="row two" style="margin-top:1rem">
                                <div>
                                    <label>Presenter Name (required)</label>
                                    <input type="text" name="presenter_name" maxlength="100" required value="{{ old('presenter_name') }}">
                                </div>
                                <div>
                                    <label>Corresponding Author (required)</label>
                                    <select id="corresponding_author" name="corresponding_author" required>
                                        <option value="">-- Select --</option>
                                    </select>
                                </div>
                            </div>

                            <div style="margin-top:1rem">
                                <label>Author(s) (required)</label>
                                <div class="authors-list" id="authors-list"></div>
                                <div style="display:flex;gap:.5rem;margin-top:.5rem">
                                    <input id="author-input" type="text" placeholder="Add author name">
                                    <button type="button" id="add-author" class="btn btn-accent">Add</button>
                                </div>
                                <div class="field-note">Add authors one-by-one; then select the corresponding author above.</div>
                            </div>

                            <div style="margin-top:1rem">
                                <label>Abstract Category (required — select one or more)</label>
                                <div class="row" style="margin-top:.5rem">
                                    <label><input type="checkbox" name="categories[]" value="Potential of Agroecology"> Potential of Agroecology in Meeting Africa’s and Global Food and Nutrition Security Needs</label>
                                    <label><input type="checkbox" name="categories[]" value="Agroecology and NbS"> Agroecology and Nature-Based Solutions for Sustainable Soil and Ecosystems Health in Africa</label>
                                    <label><input type="checkbox" name="categories[]" value="Agroecological Technologies"> Agroecological and Nature-Based Solutions Technologies and Practices in Africa</label>
                                    <label><input type="checkbox" name="categories[]" value="Agro-Waste"> Agro-Waste Valorisation and Circularity in African Communities</label>
                                    <label><input type="checkbox" name="categories[]" value="Entrepreneurship"> Agroecological Entrepreneurship, Value Addition and Marketing</label>
                                    <label><input type="checkbox" name="categories[]" value="Assessment"> Assessment of African Agroecological Systems</label>
                                    <label><input type="checkbox" name="categories[]" value="Policies"> National, Regional and Continental Agricultural Policies and Agroecology in Africa</label>
                                    <label><input type="checkbox" name="categories[]" value="Financing"> Financing and Investment in Agroecology and NbS in Africa</label>
                                    <label><input type="checkbox" name="categories[]" value="Upscaling"> Upscaling and Out-scaling Agroecological Practices</label>
                                    <label><input type="checkbox" name="categories[]" value="Other"> Other: <input type="text" name="category_other" placeholder="Specify"></label>
                                </div>
                            </div>

                            <div style="margin-top:1rem">
                                <label>Abstract Content (required — max 300 words)</label>
                                <textarea name="abstract_content" id="abstract_content">{{ old('abstract_content') }}</textarea>
                                <div class="field-note"><span id="word-count">0</span> / 300 words</div>
                            </div>

                            <div style="margin-top:1rem">
                                <label>Keywords (3 to 5 words)</label>
                                <input id="keywords-input" type="text" placeholder="Type a keyword and press comma or Enter">
                                <div id="keywords-list" class="chips" style="margin-top:.5rem"></div>
                            </div>

                            <div style="margin-top:1rem" class="row two">
                                <div>
                                    <label>Preferred Presentation Format</label>
                                    <select name="presentation_format" required>
                                        <option value="">-- Select --</option>
                                        <option value="Oral">Oral Presentation</option>
                                        <option value="Poster">Poster Presentation</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div>
                                    <label>Have you presented this work elsewhere?</label>
                                    <div style="display:flex;gap:1rem;align-items:center">
                                        <label><input type="radio" name="presented_elsewhere" value="yes" required> Yes</label>
                                        <label><input type="radio" name="presented_elsewhere" value="no"> No</label>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-top:1rem">
                                <label><input type="checkbox" name="declaration" value="1" required> I hereby declare that the abstract submitted is my original work and that I agree to the terms.</label>
                            </div>

                            <div style="margin-top:1rem">
                                <label>Upload abstract (PDF or DOCX) — up to 5 files, max 100 MB each</label>
                                <input type="file" name="files[]" id="files" accept=".pdf,.docx" multiple>
                            </div>

                            <div style="margin-top:1.25rem;display:flex;gap:1rem;justify-content:flex-end">
                                <button type="submit" class="btn btn-primary">Submit Abstract</button>
                                <button type="reset" class="btn btn-accent" type="reset">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm sm:text-left">
                        &nbsp;
                    </div>

                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>

        <script>
            (function(){
                const authors = [];
                const kw = [];

                const authorsList = document.getElementById('authors-list');
                const authorInput = document.getElementById('author-input');
                const addAuthorBtn = document.getElementById('add-author');
                const correspondingSelect = document.getElementById('corresponding_author');

                function renderAuthors(){
                    authorsList.innerHTML = '';
                    correspondingSelect.innerHTML = '<option value="">-- Select --</option>';
                    authors.forEach((a,i)=>{
                        const div = document.createElement('div'); div.className='item';
                        const span = document.createElement('div'); span.textContent = a; span.style.flex='1';
                        const hid = document.createElement('input'); hid.type='hidden'; hid.name='authors[]'; hid.value=a;
                        const btn = document.createElement('button'); btn.type='button'; btn.textContent='Remove'; btn.style.marginLeft='8px'; btn.onclick = ()=>{ authors.splice(i,1); renderAuthors(); };
                        div.appendChild(span); div.appendChild(hid); div.appendChild(btn);
                        authorsList.appendChild(div);

                        const opt = document.createElement('option'); opt.value=a; opt.textContent=a; correspondingSelect.appendChild(opt);
                    });
                }

                addAuthorBtn.addEventListener('click', ()=>{
                    const v = authorInput.value.trim(); if(!v) return; authors.push(v); authorInput.value=''; renderAuthors();
                });

                // Keywords
                const keywordsInput = document.getElementById('keywords-input');
                const keywordsList = document.getElementById('keywords-list');
                function renderKeywords(){ keywordsList.innerHTML=''; kw.forEach((k,i)=>{ const chip=document.createElement('div'); chip.className='chip'; chip.textContent=k; const hid=document.createElement('input'); hid.type='hidden'; hid.name='keywords[]'; hid.value=k; const rem=document.createElement('button'); rem.type='button'; rem.textContent='✕'; rem.onclick=()=>{ kw.splice(i,1); renderKeywords(); }; chip.appendChild(rem); chip.appendChild(hid); keywordsList.appendChild(chip); }); }
                keywordsInput.addEventListener('keydown', (e)=>{ if(e.key==='Enter' || e.key===','){ e.preventDefault(); const v=keywordsInput.value.replace(/,/g,'').trim(); if(v && kw.length<5){ kw.push(v); } keywordsInput.value=''; renderKeywords(); } });

                // Word count
                const abstractEl = document.getElementById('abstract_content');
                const wordCountEl = document.getElementById('word-count');
                function updateWordCount(){ const text=abstractEl.value||''; const count = text.trim()? text.trim().split(/\s+/).length:0; wordCountEl.textContent = count; if(count>300) wordCountEl.style.color='#b91c1c'; else wordCountEl.style.color=''; }
                abstractEl.addEventListener('input', updateWordCount);
                updateWordCount();

                // simple submit validation
                const form = document.querySelector('form[action="{{ route('abstracts.submit') }}"]');
                form.addEventListener('submit', function(e){
                    const files = document.getElementById('files').files; if(files.length>5){ alert('You can upload up to 5 files.'); e.preventDefault(); return; }
                    for(const f of files){ if(f.size > 100*1024*1024){ alert('Each file must be <= 100MB'); e.preventDefault(); return; } }
                    const wc = abstractEl.value.trim()? abstractEl.value.trim().split(/\s+/).length:0; if(wc>300){ alert('Abstract must be 300 words or fewer.'); e.preventDefault(); return; }
                    if(kw.length<1 || kw.length>5){ if(!confirm('Keywords should be 1–5 items. Continue anyway?')){ e.preventDefault(); return; } }
                });
            })();
        </script>

    </body>
</html>
