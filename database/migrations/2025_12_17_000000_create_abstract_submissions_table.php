<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('abstract_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('title', 500);
            $table->string('presenter_name', 150);
            $table->json('authors');
            $table->string('corresponding_author');
            $table->boolean('is_student')->default(false);
            $table->json('categories');
            $table->string('category_other')->nullable();
            $table->text('abstract_content');
            $table->json('keywords');
            $table->string('presentation_format');
            $table->string('presentation_format_other')->nullable();
            $table->boolean('presented_elsewhere')->default(false);
            $table->boolean('declaration')->default(false);
            $table->json('uploaded_files')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('abstract_submissions');
    }
};
