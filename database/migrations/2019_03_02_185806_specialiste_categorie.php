<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SpecialisteCategorie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('specialiste_categorie', function (Blueprint $table) {
        $table->integer('categorie_id')->unsigned();
        $table->integer('specialiste_id')->unsigned();
        $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('specialiste_id')->references('id')->on('specialistes')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('specialiste_categorie');
    }
}
