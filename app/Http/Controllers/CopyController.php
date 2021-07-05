<?php

namespace App\Http\Controllers;

use App\Copy;
use App\Magazine;
use Illuminate\Http\Request;

class CopyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magazines = Magazine::all();
        $copies = Copy::all();
        return view('copies.index')->with('copies', $copies)->with('magazines', $magazines);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $magazines = Magazine::all();
        return view('copies.create')->with('magazines', $magazines);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $copy = new Copy();
        $copy->numero_registro_id = $request->get('numero_registro_id');
        $copy->fecha = $request->get('fecha');
        $copy->numero_paginas = $request->get('numero_paginas');
        $copy->numero_ejemplares = $request->get('numero_ejemplares');
        $copy->save();
        return redirect('/copies');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $magazines = Magazine::all();
        $copies = Copy::find($id);
        return view('copies.edit')->with('copies', $copies)->with('magazines', $magazines);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $copy = Copy::find($id);

        $copy->numero_registro_id = $request->get('numero_registro_id');
        $copy->fecha = $request->get('fecha');
        $copy->numero_paginas = $request->get('numero_paginas');
        $copy->numero_ejemplares = $request->get('numero_ejemplares');
        $copy->save();

        return redirect('/copies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $copy = Copy::find($id);
        $copy->delete();
        return redirect('/copies');
    }
}
