<?php

namespace App\Http\Controllers;
use App\Datasiswa;
use App\Datapertanyaan;
use Illuminate\Http\Request;

class DatapertanyaanController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $dtanya = Datapertanyaan::with('datasiswa')->get();
        return view('datatanya.index',compact('dtanya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $s = Datasiswa::all();
        return view('datatanya.create',compact('s'));
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
            'pertanyaan' => 'required|',
            'id_siswa' => 'required|',
            ]);
        $dtanya = new Datapertanyaan;
        $dtanya->pertanyaan = $request->pertanyaan;
        $dtanya->id_siswa = $request->id_siswa;
        $dtanya->save();
        return redirect()->route('datatanya.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\DataPertanyaan  $dataPertanyaan
     * @return \Illuminate\Http\Response
     */
    public function show(DataPertanyaan $dataPertanyaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataPertanyaan  $dataPertanyaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtanya = Datapertanyaan::findOrFail($id);
        $s = Datasiswa::all();
        $selecteddtanya = Datapertanyaan::findOrFail($id)->id_siswa;
        return view('datatanya.edit',compact('dtanya','s','selecteddtanya'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataPertanyaan  $dataPertanyaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'pertanyaan' => 'required|',
            'id_siswa' => 'required|',
            ]);
        $dtanya = Datapertanyaan::findOrFail($id);
        $dtanya->pertanyaan = $request->pertanyaan;
        $dtanya->id_siswa = $request->id_siswa;
        $dtanya->save();
        return redirect()->route('datatanya.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataPertanyaan  $dataPertanyaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtanya = Datapertanyaan::findOrFail($id);
        $dtanya->delete();
       
        return redirect()->route('datatanya.index');
    }
}
