<?php

namespace App\Http\Controllers;

use App\Models\pencipta;
use App\Models\tarian;
use Illuminate\Http\Request;

class TarianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = "List Tarian";

        $tarian = tarian::all();

        return view('tarian', compact('title', 'tarian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = "List Tarian";
        $tarian = tarian::all();
        return view('tarianInput',compact('tarian', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'tarian_name' => 'required|min:5|max:100',
         ]);

        //
        tarian::create([

            'tarian_code' =>$request->tarian_code,
            'tarian_name' =>$request->tarian_name,
            'tipe_tarian' =>$request->tipe_tarian,
            'pencipta_tari' =>$request->pencipta_tari,
            'tanggal' =>$request->tanggal,
            'description' =>$request->description

        ]);
        return redirect(route('tarian.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tarian  $tarian
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        $title = "List Tarian";

        $tarian = tarian::findOrFail($id);
        return view('tarianShowDetail', compact('tarian', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tarian  $tarian
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $title = "List Tarian";
        $pencipta = pencipta::all();
        $tarian = tarian::findOrFail($id);
        return view('tarianUpdate', compact('tarian', 'title', 'pencipta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tarian  $tarian
     * @return \Illuminate\Http\Response
     */
    public function update( $request,  $id)
    {
        //
        $title = "List Tarian";

        $tarian = tarian::findOrFail($id);
        $tarian->update([
            'tarian_code' =>$request->tarian_code,
            'tarian_name' =>$request->tarian_name,
            'tipe_tarian' =>$request->tipe_tarian,
            'pencipta_tari' =>$request->pencipta_tari,
            'tanggal' =>$request->tanggal,
            'description' =>$request->description
        ]);
        return redirect(route('tarian.index', compact('title')));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tarian  $tarian
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $tarian = tarian::findOrFail($id);
        $tarian->delete();
        return redirect(route('tarian.index'));
    }
}
