<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datapegawai extends Model
{
    protected $table = 'datapegawais';
    protected $fillable = ['nama','nipd','id_user'];

    public $timestamps = true;

    public function user(){
    	return $this->belongsTo('App\User','id_user');
    }
}
