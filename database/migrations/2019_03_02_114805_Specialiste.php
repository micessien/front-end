<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Specialiste extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('specialistes', function (Blueprint $table) {
        $table->increments('id');
        $table->string('firstName');
        $table->string('lastName');
        $table->string('title');
        $table->string('Adress');
        $table->string('email');
        $table->string('contact');
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
       Schema::dropIfExists('specialistes');
    }
}
