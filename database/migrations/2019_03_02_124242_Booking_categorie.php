<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BookingCategorie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('booking_categorie', function (Blueprint $table) {
        $table->integer('categorie_id')->unsigned();
        $table->integer('booking_id')->unsigned();
        $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('bookings_categories');
    }
}
