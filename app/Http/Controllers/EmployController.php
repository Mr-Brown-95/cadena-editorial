<?php

namespace App\Http\Controllers;

use App\Branche;
use App\Employ;
use Illuminate\Http\Request;

class EmployController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $branches = Branche::all();
        $employs = Employ::all();
        return view('employs.index')->with('employs', $employs)->with('branches', $branches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branches = Branche::all();
        return view('employs.create')->with('branches', $branches);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employs = new Employ();

        $employs->codigoSucursal_id = $request->get('codigoSucursal_id');
        $employs->nif = $request->get('nif');
        $employs->nombre = $request->get('nombre');
        $employs->apellido1 = $request->get('apellido1');
        $employs->apellido2 = $request->get('apellido2');
        $employs->telefono = $request->get('telefono');
        $employs->save();

        return redirect('/employs');

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
        $branches = Branche::all();
        $employs = Employ::find($id);
        return view('employs.edit')->with('employs', $employs)->with('branches', $branches);

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
        $employs = Employ::find($id);

        $employs->codigoSucursal_id = $request->get('codigoSucursal_id');
        $employs->nif = $request->get('nif');
        $employs->nombre = $request->get('nombre');
        $employs->apellido1 = $request->get('apellido1');
        $employs->apellido2 = $request->get('apellido2');
        $employs->telefono = $request->get('telefono');
        $employs->save();
        return redirect('/employs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employ = Employ::find($id);
        $employ->delete();
        return redirect('/employs');
    }
}
