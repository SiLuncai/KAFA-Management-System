<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddActivityIdToFinalActivityReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('final_activity_reports', function (Blueprint $table) {
            $table->unsignedBigInteger('activity_id')->after('id')->nullable();

            // Create the foreign key constraint
            $table->foreign('activity_id')->references('id')->on('activities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('final_activity_reports', function (Blueprint $table) {
            // Drop the foreign key constraint first
            $table->dropForeign(['activity_id']);

            // Then drop the column
            $table->dropColumn('activity_id');
        });
    }
}

