<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('origin_id')->unsigned();
            $table->bigInteger('destination_id')->unsigned();
            $table->integer('min_weight')->default(0);
            $table->integer('price')->default(0);
            $table->string('estimate')->default('');
            $table->timestamps();
            $table->foreign('origin_id')->references('id')->on('cities');
            $table->foreign('destination_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pricings');
    }
}
