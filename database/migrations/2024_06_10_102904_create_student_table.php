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
        Schema::create('student', function (Blueprint $table) {
            $table->id('studentID');
            $table->unsignedBigInteger('classID'); // Remove 'auto_increment' attribute
            $table->unsignedBigInteger('parentID');
            $table->unsignedBigInteger('schoolID'); 
            $table->unsignedBigInteger('yearID');
            $table->string('studentName');
            $table->string('gender');
            $table->string('myKidNo');
            $table->integer('weight');
            $table->integer('height');
            $table->string('disability');
            $table->string('allergy');
            $table->string('diseaseType');
            $table->timestamps();

            // Define foreign keys
            $table->foreign('classID')->references('classID')->on('classes')->onDelete('cascade');
            $table->foreign('parentID')->references('parentID')->on('parents')->onDelete('cascade');
            $table->foreign('schoolID')->references('schoolID')->on('school')->onDelete('cascade');
            $table->foreign('yearID')->references('yearID')->on('years')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};