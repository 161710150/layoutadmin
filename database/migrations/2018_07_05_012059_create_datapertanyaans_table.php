<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatapertanyaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapertanyaans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pertanyaan');
            $table->unsignedInteger('id_siswa');
            $table->foreign('id_siswa')->references('id')->on('datasiswas')->ondelete('cascade');
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
        Schema::dropIfExists('datapertanyaans');
    }
}
