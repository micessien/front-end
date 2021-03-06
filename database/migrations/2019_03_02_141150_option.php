<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Option extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('options', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->boolean('answers')->default(false);
        $table->integer('step_id')->unsigned();
        $table->foreign('step_id')->references('id')->on('steps')->onDelete('cascade')->onUpdate('cascade');
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
          Schema::dropIfExists('options');
    }
}
