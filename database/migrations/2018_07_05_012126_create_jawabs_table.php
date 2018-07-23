<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJawabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawabs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jawaban');
            $table->unsignedInteger('id_pertanyaan');
            $table->foreign('id_pertanyaan')->references('id')->on('datapertanyaans')->ondelete('cascade');
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
        Schema::dropIfExists('jawabs');
    }
}
