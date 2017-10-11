<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorGridsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsor_grids', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grid_id');
            $table->integer('sponsor_id');
            $table->integer('category_id');
            $table->integer('alacarte')->nullable();
            $table->text('alacarte_text')->nullable();
            $table->text('custom_bio')->nullable();
            $table->string('custom_link')->nullable();
            $table->string('custom_image')->nullable();
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
        Schema::dropIfExists('sponsor_grids');
    }
}
