<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id');
            $table->string('track_name');
            $table->text('description')->nullable();
            $table->text('quote')->nullable();
            $table->string('color_class')->nullable();
            $table->string('main_color')->nullable();
            $table->string('url')->nullable();
            $table->string('room')->nullable();
            $table->string('level')->nullable();
            $table->integer('track_status')->nullable();
            $table->integer('order');
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
        Schema::dropIfExists('tracks');
    }
}
