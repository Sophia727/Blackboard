<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_faculties', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('fac_subjects_id')->constrained('subjects');
            $table->foreignId('fac_classrooms_id')->constrained('classrooms');
            $table->foreignId('fac_users_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_faculties');
    }
}
