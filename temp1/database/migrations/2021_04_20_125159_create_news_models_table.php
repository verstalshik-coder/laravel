<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_models', function (Blueprint $table) {
            $table->id();
            $table->string('src');
            $table->string('title');
            $table->date('time');
            $table->string('desc');
            $table->string('link');
            $table->string('plat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_models');
    }
}
