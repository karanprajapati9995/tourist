<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destination', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('region_id')->nullable();
            $table->string('thumnail_image')->nullable();
            $table->string('Banner_image')->nullable();
            $table->longText('gallery')->nullable();
            $table->string('title')->nullable();
            $table->text('short_description')->nullable();
            $table->string('tour_days')->nullable();
            $table->string('tour_location')->nullable();
            $table->text('description')->nullable();
            $table->string('itinerary')->nullable();
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
        Schema::dropIfExists('destination');
    }
}
