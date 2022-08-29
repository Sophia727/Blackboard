<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("photo")->nullable();
            $table->string("title");
            $table->text("description");
            $table->date("publication_date")->nullable();
            $table->boolean("published")->default(false);
            $table->timestamps();

            $table->unsignedBigInteger("author_id");
            $table->foreign("author_id")->references("id")->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
