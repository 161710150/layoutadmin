<?php

namespace App\Http\Controllers;

use App\Jurusan;
use Illuminate\Http\Request;
use Session;
use File;
class JurusanController extends Controller
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
        $j = Jurusan::all();
        return view('jurusan.index',compact('j'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusan.create');
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
            'nama_jurusan' => 'required',
        ]);
        $j = new Jurusan;
        $j->nama_jurusan = $request->nama_jurusan;
        $j->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data <b>$j->nama_jurusan</b> Success"
        ]);
        return redirect()->route('jurusan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $j = Jurusan::findOrFail($id);
        return view('jurusan.show',compact('j'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $j = Jurusan::findOrFail($id);
        return view('jurusan.edit', compact('j'));
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
            'nama_jurusan' => 'required',
        ]);
        $j = Jurusan::findOrFail($id);
        $j->nama_jurusan = $request->nama_jurusan;
        $j->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data <b>$j->nama_jurusan</b> Success Update"
        ]);
        return redirect()->route('jurusan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Jurusan::destroy($id)) return redirect()->back();
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil Dihapus"
        ]);
        return redirect()->route('jurusan.index');
    }
}
