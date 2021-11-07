<?php

namespace App\Http\Controllers;

use App\Models\pencipta;
use App\Models\tarian;
use Illuminate\Http\Request;

class PenciptaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = "Author";

        $pencipta = pencipta::all();

        return view('penciptaTari', compact('title', 'pencipta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = "Author";
        return view('penciptaInput', compact('title'));
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
            'pencipta_name' => 'required|min:5|max:100',
         ]);

        //
        pencipta::create([

            'pencipta_code' =>$request->pencipta_code,
            'pencipta_name' =>$request->pencipta_name,
            'daerah_asal' =>$request->daerah_asal,
            'TTL' =>$request->TTL,
            'description_pencipta' =>$request->description_pencipta
        ]);
        return redirect(route('pencipta.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pencipta  $pencipta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $title = "Author";

        $pencipta = pencipta::findOrFail($id);
        $tarian = tarian::where("pencipta_tari",$id)->get();
        return view('penciptaShowDetail', compact('pencipta','tarian', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pencipta  $pencipta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $title = "Author";
        $pencipta = pencipta::findOrFail($id);
        return view('penciptaUpdate', compact('pencipta','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pencipta  $pencipta
     * @return \Illuminate\Http\Response
     */
    public function update($request, $id)
    {
        //
        $pencipta = pencipta::findOrFail($id);
        $pencipta->update([
            'pencipta_code' =>$request->pencipta_code,
            'pencipta_name' =>$request->pencipta_name,
            'daerah_asal' =>$request->daerah_asal,
            'TTL' =>$request->TTL,
            'description_pencipta' =>$request->description_pencipta
        ]);
        return redirect(route('pencipta.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pencipta  $pencipta
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $pencipta = pencipta::findOrFail($id);
        $pencipta->delete();
        return redirect(route('pencipta.index'));
    }
}
