<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datasiswas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nis');
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->ondelete('cascade');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->text('alamat');
            $table->string('gambar');
            $table->unsignedInteger('id_kelas');
            $table->foreign('id_kelas')->references('id')->on('kelas')->ondelete('cascade');
            $table->unsignedInteger('id_jurusan');
            $table->foreign('id_jurusan')->references('id')->on('jurusans')->ondelete('cascade');
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
        Schema::dropIfExists('datasiswas');
    }
}
