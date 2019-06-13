<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FlusionFlux extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('FlusionFlux', function (Blueprint $table) {
        $table->string('idf');
        $table->string('type');
        $table->string('format');
        $table->string('nom');
        $table->string('description');
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
        Schema::dropIfExists('FlusionFlux');
    }
}
