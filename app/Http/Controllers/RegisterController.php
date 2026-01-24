<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Mail\RegistrationReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /**
     * Display the registration form.
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a new registration.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // Section A: Personal Information
            'full_name' => 'required|string|max:255',
            'gender' => 'required|string|in:Male,Female,Prefer not to say',
            'nationality' => 'required|string|max:255',
            'country_of_residence' => 'required|string|max:255',
            
            // Section B: Contact Details
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            
            // Section C: Participant Category
            'participant_category' => 'required|string',
            'participant_category_other' => 'nullable|string|max:255',
            
            // Section D: Conference Participation
            'participation_mode' => 'required|string|in:Physical,Virtual',
            'days_to_attend' => 'required|array|min:1',
            'days_to_attend.*' => 'string',
            'presenting' => 'required|string',
            
            // Section E: Areas of Interest
            'areas_of_interest' => 'required|array|min:1|max:3',
            'areas_of_interest.*' => 'string',
            
            // Section F: Registration Fee & Payment
            'registration_category' => 'required|string',
            'payment_method' => 'required|string',
            
            // Section G: Logistics & Accessibility
            'requires_visa' => 'required|boolean',
            'requires_accommodation' => 'required|boolean',
            'dietary_requirements' => 'required|string',
            'dietary_requirements_details' => 'nullable|string',
            'accessibility_needs' => 'nullable|string',
            
            // Section H: Consent & Data Use
            'consent_photography' => 'required|accepted',
            'consent_data_protection' => 'required|accepted',
            
            // Section I: Additional Information
            'how_heard' => 'required|string',
            'how_heard_other' => 'nullable|string|max:255',
            'additional_comments' => 'nullable|string',
        ]);

        // Create the registration
        $registration = Registration::create($validated);

        // Send confirmation email
        try {
            Mail::to($validated['email'])->send(new RegistrationReceived($registration));
        } catch (\Exception $e) {
            // Log the error but don't fail the registration
            \Log::error('Failed to send registration email: ' . $e->getMessage());
        }

        return redirect()->route('register.success')
            ->with('success', 'Your registration has been submitted successfully!');
    }

    /**
     * Display the success page.
     */
    public function success()
    {
        return view('register-success');
    }
}
