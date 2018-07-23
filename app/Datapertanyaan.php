<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datapertanyaan extends Model
{
    protected $table = 'datapertanyaans';
    protected $fillable = ['pertanyaan','id_siswa'];

    public function datasiswa() {
        return $this->belongsTo('App\Datasiswa','id_siswa');
    }
    public function jawab (){
        return $this->hasMany('App\Jawab','id_pertanyaan');
    }
}
