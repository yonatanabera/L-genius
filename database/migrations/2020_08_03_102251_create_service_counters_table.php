<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceCountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_counters', function (Blueprint $table) {
            $table->id();
            $table->integer('satisfied_clients');
            $table->integer('ongoing_projects');
            $table->integer('completed_projects');
            $table->integer('graduated_entrepreneurs');
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
        Schema::dropIfExists('service_counters');
    }
}
