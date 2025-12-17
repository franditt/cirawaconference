<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbstractSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'title',
        'presenter_name',
        'authors',
        'corresponding_author',
        'is_student',
        'categories',
        'category_other',
        'abstract_content',
        'keywords',
        'presentation_format',
        'presentation_format_other',
        'presented_elsewhere',
        'declaration',
        'uploaded_files',
    ];

    protected $casts = [
        'authors' => 'array',
        'categories' => 'array',
        'keywords' => 'array',
        'uploaded_files' => 'array',
        'is_student' => 'boolean',
        'presented_elsewhere' => 'boolean',
        'declaration' => 'boolean',
    ];
}
