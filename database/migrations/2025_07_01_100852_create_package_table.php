<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package', function (Blueprint $table) {
               $table->increments('id');
            $table->string('region_id')->nullable();
            $table->string('budget_id')->nullable();
            $table->string('duration_id')->nullable();
            $table->string('traveler_id')->nullable();
            $table->string('experience_id')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('destination_name')->nullable();
            $table->text('short_description')->nullable();
            $table->string('tour_days')->nullable();
            $table->string('tour_location')->nullable();
            $table->text('description')->nullable();
            $table->string('price')->nullable();
            $table->string('stars')->nullable();
            $table->string('reviews')->nullable();
            $table->longText('attractions')->nullable();
            $table->json('itinerary')->nullable();
            $table->string('thumnail_image')->nullable();
            $table->string('banner_image')->nullable();
            $table->longText('gallery')->nullable();
            $table->text('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_keyword')->nullable();
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
        Schema::dropIfExists('package');
    }
}
