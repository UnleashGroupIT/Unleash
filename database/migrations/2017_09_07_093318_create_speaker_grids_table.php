<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeakerGridsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speaker_grids', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grid_id');
            $table->integer('speaker_id');
            $table->integer('order_number');
            $table->text('custom_bio')->nullable();
            $table->string('custom_link')->nullable();
            $table->string('custom_image')->nullable();
            $table->string('custom_title')->nullable();
            $table->string('custom_company')->nullable();
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
        Schema::dropIfExists('speaker_grids');
    }
}
