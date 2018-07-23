<?php

namespace App\Http\Controllers;

use App\Jawab;
use App\Datapertanyaan;
use Illuminate\Http\Request;

class JawabController extends Controller
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
        $jawab = Jawab::with('datapertanyaan')->get();
        return view('jawab.index',compact('jawab'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datapertanyaan = Datapertanyaan::all();
        
        return view('jawab.create',compact('datapertanyaan'));
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
            'jawaban' => 'required|',
            'id_pertanyaan' => 'required|',
            ]);
        $jawab = new Jawab;
        $jawab->jawaban = $request->jawaban;
        $jawab->id_pertanyaan = $request->id_pertanyaan;
        $jawab->save();
        
        ;
        return redirect()->route('jawab.index');

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\jawab  $jawab
     * @return \Illuminate\Http\Response
     */
    public function show(jawab $jawab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jawab  $jawab
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jawab = Jawab::findOrFail($id);
        $datapertanyaan = Datapertanyaan::all();
        $selecteddatapertanyaan = Jawab::findOrFail($id)->id_pertanyaan;
        return view('jawab.edit',compact('jawab','datapertanyaan','selecteddatapertanyaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jawab  $jawab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'jawaban' => 'required|',
            'id_pertanyaan' => 'required|',
                    ]);
        $jawab = Jawab::findOrFail($id);
        $jawab->jawaban = $request->jawaban;
        $jawab->id_pertanyaan = $request->id_pertanyaan;
        $jawab->save();
        return redirect()->route('jawab.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jawab  $jawab
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jawab = Jawab::findOrFail($id);
        $jawab->delete();
       
        return redirect()->route('jawab.index');
    }
}
