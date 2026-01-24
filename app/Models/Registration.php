<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'gender',
        'nationality',
        'country_of_residence',
        'email',
        'phone_number',
        'organization',
        'position',
        'participant_category',
        'participant_category_other',
        'participation_mode',
        'days_to_attend',
        'presenting',
        'areas_of_interest',
        'registration_category',
        'payment_method',
        'requires_visa',
        'requires_accommodation',
        'dietary_requirements',
        'dietary_requirements_details',
        'accessibility_needs',
        'consent_photography',
        'consent_data_protection',
        'how_heard',
        'how_heard_other',
        'additional_comments',
    ];

    protected $casts = [
        'days_to_attend' => 'array',
        'areas_of_interest' => 'array',
        'requires_visa' => 'boolean',
        'requires_accommodation' => 'boolean',
        'consent_photography' => 'boolean',
        'consent_data_protection' => 'boolean',
    ];
}
