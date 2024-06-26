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
            $table->string('titleBulletin'); // Title of the bulletin
            $table->string('descBulletin'); // Description of the bulletin
            $table->integer('like')->default(0); // Counter for like button
            $table->timestamps();

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