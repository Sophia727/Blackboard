<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('registration_num');
            $table->string("phone");
            $table->text('address');
            $table->enum('role',["admin", "professor", "parent", "student", ])->default('parent');
            $table->boolean("activate")->default(false);
            $table->string("photo")->nullable();
            $table->foreignId('speciality_id')->constrained('specialities')->nullable();
            $table->rememberToken();
            $table->timestamp('last_sign_in_at')->nullable();
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
        //Schema::dropIfExists('users');
    }
}
