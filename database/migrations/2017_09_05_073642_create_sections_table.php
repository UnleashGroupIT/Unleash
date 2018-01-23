<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id');
            $table->integer('page_id');
            $table->string('section_name')->nullable();
            $table->integer('section_number');
            $table->string('background_class')->nullable();
            $table->text('header_text')->nullable();
            $table->text('content_text')->nullable();
            $table->string('alignment')->nullable();
            $table->string('extra_image')->nullable();
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
        Schema::dropIfExists('sections');
    }
}
