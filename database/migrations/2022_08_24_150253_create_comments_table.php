<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text("message");
            $table->date("publication_date")->nullable();
            $table->boolean("published")->default(false);
            $table->timestamps();
            $table->unsignedBigInteger("author_comm_id");
            $table->foreign("author_comm_id")->references("id")->on('users');
            $table->unsignedBigInteger("post_id")->nullable();            
            $table->foreign("post_id")->references("id")->on('posts');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
