<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            
            // Section A: Personal Information
            $table->string('full_name');
            $table->string('gender');
            $table->string('nationality');
            $table->string('country_of_residence');
            
            // Section B: Contact Details
            $table->string('email');
            $table->string('phone_number');
            $table->string('organization');
            $table->string('position');
            
            // Section C: Participant Category
            $table->string('participant_category');
            $table->string('participant_category_other')->nullable();
            
            // Section D: Conference Participation
            $table->string('participation_mode');
            $table->json('days_to_attend');
            $table->string('presenting');
            
            // Section E: Areas of Interest
            $table->json('areas_of_interest');
            
            // Section F: Registration Fee & Payment
            $table->string('registration_category');
            $table->string('payment_method');
            
            // Section G: Logistics & Accessibility
            $table->boolean('requires_visa');
            $table->boolean('requires_accommodation');
            $table->string('dietary_requirements');
            $table->text('dietary_requirements_details')->nullable();
            $table->text('accessibility_needs')->nullable();
            
            // Section H: Consent & Data Use
            $table->boolean('consent_photography');
            $table->boolean('consent_data_protection');
            
            // Section I: Additional Information
            $table->string('how_heard');
            $table->string('how_heard_other')->nullable();
            $table->text('additional_comments')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
