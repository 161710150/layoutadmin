<?php

namespace App\Http\Controllers;

use App\Datapegawai;
use Illuminate\Http\Request;
use App\Role;
use Illuminate\Foundation\Auth\RegisterUsers;
use App\User;
use File;
use Session;

class DatapegawaiController extends Controller
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
        $dp = Datapegawai::all();
         return view('datapegawai.index',compact('dp'));
        
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('datapegawai.create');
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'nipd' => 'required|unique:datapegawais|min:3',
            'gambar' => 'required|nullable'
            ]);

            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => bcrypt($request['password'])
            ]);
            $adminRole = Role::where('name', 'admin')->first();
            $user->attachRole($adminRole);
        $dp = new datapegawai;
        $dp->nipd = $request->nipd;
        $dp->id_user = $user->id;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/image/fotoadmin/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $dp->gambar = $filename;
            }
         $dp->save();
        return redirect()->route('datapegawai.index');

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\datapegawai  $dp
     * @return \Illuminate\Http\Response
     */
    public function show(datapegawai $dp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\datapegawai  $dp
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dp = Datapegawai::findOrFail($id);
        return view('datapegawai.edit',compact('dp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\datapegawai  $dp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
    
            'password' => 'required|min:6|confirmed',
            'nipd' => 'required|',
            'gambar' => 'required|'
                    ]);
                    $user = User::create([
                        'name' => $request['name'],
                        'email' => $request['email'],
                        'permission' => $request['permission'],
                        'password' => bcrypt($request['password'])
                    ]);

        $dp = Datapegawai::findOrFail($id);
        $dp->nipd = $request->nipd;
        $dp->id_user = $request->id_user;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/image/fotoadmin/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus gambar lama, jika ada
        if ($dp->gambar) {
        $old_gambar = $dp->gambar;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/image/fotoadmin/'
        . DIRECTORY_SEPARATOR . $dp->gambar;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $dp->gambar = $filename;
}
        $dp->save();
        return redirect()->route('datapegawai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\datapegawai  $dp
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user1 = User::findOrFail($id);
        $dp = Datapegawai::findOrFail($id);
        
        if ($dp->gambar) {
            $old_gambar = $dp->gambar;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/image/fotoadmin/'
            . DIRECTORY_SEPARATOR . $dp->gambar;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
        $dp->delete();
        $user1->delete();
        return redirect()->route('datapegawai.index');
    }
}
