<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawab extends Model
{
    protected $table = 'jawabs';
    protected $fillable = ['jawaban','id_pertanyaan'];

    public function datapertanyaan() {
        return $this->belongsTo('App\Datapertanyaan','id_pertanyaan');
    }
}
