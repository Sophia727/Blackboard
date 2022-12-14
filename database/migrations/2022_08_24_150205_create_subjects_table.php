<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("classroom_name");
            $table->string("semester");
            $table->unsignedBigInteger("professor_id");
            $table->foreign("professor_id")->references("id")->on('users')->where('role','professor');
            $table->foreignId('student_subject_id')->constrained('users')->where('role', 'student')->nullable();
            $table->foreignId('subjects_speciality_id')->constrained('specialities')->nullable();
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
        Schema::dropIfExists('subjects');
    }
}
