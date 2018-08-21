<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('author');
            $table->string('file')->nullable();
            $table->string('description');
            $table->integer('comments_id')->unsigned()->nullable();
            $table->foreign('comments_id')->references('id')->on('comments');
            $table->integer('tags_id')->unsigned()->nullable();
            $table->foreign('tags_id')->references('id')->on('tags');
            $table->integer('categories_id')->unsigned()->nullable();
            $table->foreign('categories_id')->references('id')->on('categories');
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
        Schema::dropIfExists('contents');
    }
}
