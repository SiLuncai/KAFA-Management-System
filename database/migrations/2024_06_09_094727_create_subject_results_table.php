<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id'); // Foreign key column (implementation to be added manually)
            $table->unsignedBigInteger('subject_id'); // Foreign key column (implementation to be added manually)
            $table->integer('marks');
            $table->string('grade');
            $table->string('updateStudentStats');
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
        Schema::dropIfExists('subject_results');
    }
}
