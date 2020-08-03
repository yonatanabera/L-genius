<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhyCoachingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('why_coachings', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->text('description1');
            $table->string('title2');
            $table->text('description2');
            $table->string('title3');
            $table->text('description3');
            $table->string('title4');
            $table->text('description4');
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
        Schema::dropIfExists('why_coachings');
    }
}
