<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('myKidNo')->unique();
            $table->decimal('weight', 3, 2);
            $table->decimal('height', 3, 2);
            $table->string('disability');
            $table->string('allergy');
            $table->string('diseaseType');
            $table->unsignedBigInteger('classes_id'); // Foreign key column (implementation to be added manually)
            $table->unsignedBigInteger('school_id'); // Foreign key column (implementation to be added manually)
            $table->unsignedBigInteger('year_id'); // Foreign key column (implementation to be added manually)
            $table->unsignedBigInteger('exam_id'); // Foreign key column (implementation to be added manually)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
