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
        Schema::create('consultants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->integer('experience_years');
            $table->text('about');
            $table->string('profile_photo');
            $table->string('education');
            $table->string('location');
            $table->timestamps();
        });

        Schema::create('specialties', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('consultant_specialties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('consultant_id')->constrained('consultants')->onDelete('cascade');
            $table->foreignId('specialty_id')->constrained('specialties')->onDelete('cascade');
            $table->unique(['consultant_id', 'specialty_id']); 
        });

        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('consultant_id')->constrained('consultants')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->integer('rating')->unsigned()->default(0); // Rating (misal 1-5)
            $table->text('comment')->nullable(); // Komentar opsional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultants');
        Schema::dropIfExists('specialties');
        Schema::dropIfExists('consultant_specialties');
        Schema::dropIfExists('ratings');
    }
};
