<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemReviewAndCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_review_and_comments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('item_id')->unsigned();
            $table->text('comment')->nullable();
            $table->integer('review')->nullable();
            $table->string('slug');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('shops')->onDelete('cascade');
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
        Schema::dropIfExists('item_review_and_comments');
    }
}
