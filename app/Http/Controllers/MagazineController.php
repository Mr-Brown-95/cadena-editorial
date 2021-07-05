<?php

namespace App\Http\Controllers;

use App\Magazine;
use Illuminate\Http\Request;
use voku\helper\ASCII;

class MagazineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magazines = Magazine::all();
        return view('magazines.index')->with('magazines', $magazines);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('magazines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $magazine = new Magazine();
        $magazine->titulo= $request->get('titulo');
        $magazine->periodicidad= $request->get('periodicidad');
        $magazine->tipo= $request->get('tipo');
        $magazine->save();

        return redirect('/magazines');

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
        $magazine = Magazine::find($id);
        return view('magazines.edit')->with('magazines', $magazine);
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
        $magazine = Magazine::find($id);

        $magazine->titulo = $request->get('titulo');
        $magazine->periodicidad = $request->get('periodicidad');
        $magazine->tipo = $request->get('tipo');
        $magazine->save();

        return redirect('/magazines');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $magazine = Magazine::find($id);
        $magazine->delete();

        return redirect('/magazines');

    }
}
