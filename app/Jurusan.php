<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Jurusan extends Model
{
    protected $table = 'jurusans';
    protected $fillable = ['nama_jurusan'];

    public function datasiswa()
    {
    	return $this->hasMany('App\Datasiswa', 'id_jurusan');
    }
    public static function boot()
    {
    	parent::boot();
    	self::deleting(function($jurusan){
    	//mengecek 
    		if ($jurusan->datasiswa->count() > 0) {
    	//menyiapkan pesan error
    		$html = 'Jurusan Tidak Dapat Dihapus Karena Memiliki Siswa';
    		$html .= '<ul>';
    		foreach ($jurusan->datasiswa as $book) 
    		{
    			$html .= "<li>$book->nama</li>";
    		}
    		$html .= '</ul>';
    		Session::flash("flash_notification",[
    			"level"=>"danger",
    			"message"=>$html,
    	]);
    		return false;
    	}
    });
    }
    public $timestamps = true;
}
