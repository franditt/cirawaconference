<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkshopSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'title',
        'presenter_name',
        'is_student',
        'abstract_content',
        'keywords',
        'declaration',
        'uploaded_files',
    ];

    protected $casts = [
        'keywords' => 'array',
        'uploaded_files' => 'array',
        'is_student' => 'boolean',
        'declaration' => 'boolean',
    ];
}
