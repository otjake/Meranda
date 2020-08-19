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
            $table->bigIncrements('id');
            $table->unsignedBigInteger("menu_id");
            $table->unsignedBigInteger("headline_id");
            $table->string("post");
            $table->string("post_title");
            $table->string("post_body");
            $table->string("post_tags");
            $table->string("post_img");
            $table->string("post_author");
            $table->unsignedBigInteger("Editors_pick");
            $table->unsignedBigInteger("post_status");
            $table->Integer("visits")->default(0);
            $table->timestamps();

//            $table->foreign("post")->references('post_code')->on("headlines");

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
