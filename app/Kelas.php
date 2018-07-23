<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
class Kelas extends Model
{
	protected $table = 'kelas';
    protected $fillable = ['nama_kelas'];

    public function datasiswa()
    {
    	return $this->hasMany('App\Datasiswa', 'id_kelas');
    }
    public static function boot()
    {
    	parent::boot();
    	self::deleting(function($kelas){
    	//mengecek 
    		if ($kelas->datasiswa->count() > 0) {
    	//menyiapkan pesan error
    		$html = 'kelas Tidak Dapat Dihapus Karena Memiliki Siswa';
    		$html .= '<ul>';
    		foreach ($kelas->datasiswa as $book) 
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
