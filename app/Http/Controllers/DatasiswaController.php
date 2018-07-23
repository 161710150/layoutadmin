<?php

namespace App\Http\Controllers;

use App\Datasiswa;
use Illuminate\Http\Request;
use App\Jurusan;
use App\Kelas;
use App\Role;
use App\User;
use File;
use Session;

class DatasiswaController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // menampilkan semua data post melalui model 'post'
        $s = Datasiswa::with('kelas','jurusan')->get();
        return view('siswa.index', compact('s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $k = Kelas::all();
        $j = Jurusan::all();
        return view('siswa.create', compact('k','j'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
             'nis'=>'required|unique:datasiswas',
             'name'=>'required|max:255',
             'jenis_kelamin'=>'required',
             'agama'=>'required',
             'alamat'=>'required',
             'gambar'=>'required',
             'id_kelas'=>'required',
             'id_jurusan'=>'required',
             'email' => 'required|unique:users|max:255',
             'password' => 'required|min:6|confirmed'
         ]);
        $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => bcrypt($request['password'])
            ]);
            $memberRole = Role::where('name', 'member')->first();
            $user->attachRole($memberRole);

        $s = new Datasiswa;
        $s->nis = $request->nis;
        $s->id_user = $user->id;
        $s->jenis_kelamin = $request->jenis_kelamin;
        $s->agama = $request->agama;
        $s->alamat = $request->alamat;
        $s->gambar = $request->gambar;

         if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/image/fotosiswa/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $s->gambar = $filename;
            }

        $s->id_kelas = $request->id_kelas;
        $s->id_jurusan = $request->id_jurusan;
        $s->save();
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // memanggil data pos berdasrkan id di halaman pos edit
        $s = Datasiswa::findOrFail($id);
        $k = Kelas::all();
        $j = Jurusan::all();
        $selected = Datasiswa::findOrFail($id)->id_kelas;
        $selected1 = Datasiswa::findOrFail($id)->id_jurusan;
        return view('siswa.edit',compact('s', 'k', 'selected','j','selected1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // unique dihapus karena ketika update data title tidak diubah juga tidak apa-apa
        $this->validate($request,[
            'nis'=>'required',
            'name'=>'required|max:255',
            'jenis_kelamin'=>'required',
            'agama'=>'required',
            'alamat'=>'required',
            'gambar'=>'required',
            'id_kelas'=>'required',
            'id_jurusan'=>'required',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:6|confirmed'
            ]);

        // update data berdasarkan id
        $s = Datasiswa::findOrFail($id);
        $s->nis = $request->nis;
        $s->jenis_kelamin = $request->jenis_kelamin;
        $s->agama = $request->agama;
        $s->alamat = $request->alamat;
        // edit upload foto
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/image/fotosiswa/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);

        // hapus gambar lama, jika ada
        if ($s->gambar) {
        $old_gambar = $s->gambar;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/image/fotosiswa'
        . DIRECTORY_SEPARATOR . $s->gambar;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $s->gambar = $filename;
        }
        $s->id_kelas = $request->id_kelas;
        $s->id_jurusan = $request->id_jurusan;
        
        $s->save();
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete data beradasarkan id
        $s = Datasiswa::findOrFail($id);
        if ($s->gambar) {
            $old_gambar = $s->gambar;
            $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/image/fotosiswa/'
            . DIRECTORY_SEPARATOR . $s->gambar;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
            $s->delete();
    
        return redirect()->route('siswa.index');
    }
}
