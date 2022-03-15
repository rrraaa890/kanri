<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('h_no');
            $table->string('model');
            $table->string('material');
            $table->string('plate thickness');
            $table->string('number of sheets');
            $table->text('supplement');

            $table->timestamps();
        });
    }

    h_no
日付date
機種model
材質material
板厚plate thickness
枚数number of sheets
補足supplement

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
}
