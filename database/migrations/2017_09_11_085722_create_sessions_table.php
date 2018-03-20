<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda_sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('track_id');
            $table->string('session_title');
            $table->text('session_description')->nullable();
            $table->integer('category_id');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('extra_category')->nullable();         
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
        Schema::dropIfExists('agenda_sessions');
    }
}
