<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datasiswa extends Model
{
    protected $table = 'datasiswas';
    protected $fillable = ['nis','jenis_kelamin','agama','alamat','gambar','id_kelas','id_jurusan'];
 
    public function kelas() {
		return $this->belongsTo('App\Kelas', 'id_kelas');
    }
    public function jurusan() {
		return $this->belongsTo('App\Jurusan', 'id_jurusan');
    }
    public function user(){
    	return $this->belongsTo('App\User','id_user');
    }
}
