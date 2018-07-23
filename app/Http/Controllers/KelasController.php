<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;
use Session;

class KelasController extends Controller
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
        $k = Kelas::all();
        return view('kelas.index',compact('k'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas.create');
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
            'nama_kelas' => 'required',
        ]);
        $k = new Kelas;
        $k->nama_kelas = $request->nama_kelas;
        $k->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data <b>$k->nama_kelas</b> Success"
        ]);
        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $k = Kelas::findOrFail($id);
        return view('kelas.show',compact('k'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $k = kelas::findOrFail($id);
        return view('kelas.edit', compact('k'));
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
        $this->validate($request,[
            'nama_kelas' => 'required',
        ]);
        $k = Kelas::findOrFail($id);
        $k->nama_kelas = $request->nama_kelas;
        $k->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data <b>$k->nama_kelas</b> Success Update"
        ]);
        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       if(!Kelas::destroy($id)) return redirect()->back();
       Session::flash("flash_notification",[
        "level"=>"success",
        "message"=>"berhasil dihapus"
        ]);
        return redirect()->route('kelas.index');
    }
}
