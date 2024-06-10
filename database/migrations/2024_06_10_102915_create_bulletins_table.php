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
        Schema::create('bulletins', function (Blueprint $table) {
            $table->id('bulletinID'); // Unique ID for bulletin
            $table->unsignedBigInteger('teacherID'); // Foreign key for teacher
            $table->unsignedBigInteger('parentID'); // Foreign key for parent
            $table->string('titleBulletin'); // Title of the bulletin
            $table->string('descBulletin'); // Description of the bulletin
            $table->string('comment'); // Comment on the bulletin
            $table->integer('like'); // Counter for like button
            $table->timestamps();

            // Define foreign keys
            $table->foreign('teacherID')->references('teacherID')->on('teachers')->onDelete('cascade');
            $table->foreign('parentID')->references('parentID')->on('parents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bulletins');
    }
};