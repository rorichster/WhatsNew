<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhatsNewTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('whats_new', function (Blueprint $table) {
            $table->increments('id');
            $table->string('version', 24);
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('whats_new');
    }
}
