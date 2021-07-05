<?php

namespace App\Http\Controllers;

use App\Branche;
use Illuminate\Http\Request;

class BrancheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branche::all();
        return view('branches.index')->with('branches', $branches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('branches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $branches = new Branche();
        $branches->direccion = $request->get('direccion');
        $branches->ciudad = $request->get('ciudad');
        $branches->provincia = $request->get('provincia');
        $branches->telefono = $request->get('telefono');
        //$branches->imagen = $request->get('imagen');
        $branches->imagen = 'fhg64';
        $branches->save();

        return redirect('/branches');
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
        $branche = Branche::find($id);
        return view('branches.edit')->with('branches', $branche);
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
        $branche = Branche::find($id);

        $branche->direccion = $request->get('direccion');
        $branche->ciudad = $request->get('ciudad');
        $branche->provincia = $request->get('provincia');
        $branche->telefono = $request->get('telefono');
        //$branches->imagen = $request->get('imagen');
        $branche->imagen = 'fhg64';

        $branche->save();

        return redirect('/branches');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branche = Branche::find($id);
        $branche->delete();

        return redirect('/branches');
    }
}
