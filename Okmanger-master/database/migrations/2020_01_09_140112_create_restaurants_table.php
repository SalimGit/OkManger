<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nom');
            $table->string('email');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('specialite');
            $table->string('image');
            $table->integer('lieu_id');
            $table->foreign('lieu_id')->references('id')->on('lieus');
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
        Schema::dropIfExists('restaurants');
    }
}
