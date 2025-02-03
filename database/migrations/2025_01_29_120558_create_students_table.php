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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('father_name');
            $table->string('profession');
            $table->bigInteger('mobile_number');
            $table->bigInteger('whatsapp_number');
            $table->datetime('birthdate');
            $table->string('religion');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('last_institution');
            $table->string('scholarship');
            $table->foreignId('section_id')->constrained()->cascadeOnDelete();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
