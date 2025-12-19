<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('workshop_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('title', 500);
            $table->string('presenter_name', 150);
            $table->boolean('is_student')->default(false);
            $table->text('abstract_content');
            $table->json('keywords');
            $table->boolean('declaration')->default(false);
            $table->json('uploaded_files')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('workshop_submissions');
    }
};
