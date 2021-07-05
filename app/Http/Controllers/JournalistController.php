<?php

namespace App\Http\Controllers;

use App\Journalist;
use Illuminate\Http\Request;

class JournalistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journalists = Journalist::all();
        return view('journalists.index')->with('journalists', $journalists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('journalists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $journalist = new Journalist();
        $journalist->nombre = $request->get('nombre');
        $journalist->apellido1 = $request->get('apellido1');
        $journalist->apellido2 = $request->get('apellido2');
        $journalist->telefono = $request->get('telefono');
        $journalist->especialidad = $request->get('especialidad');
        $journalist->save();

        return redirect('/journalists');
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
        $journalist = Journalist::find($id);
        return view('journalists.edit')->with('journalists', $journalist);
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
        $journalist = Journalist::find($id);

        $journalist->nombre = $request->get('nombre');
        $journalist->apellido1 = $request->get('apellido1');
        $journalist->apellido2 = $request->get('apellido2');
        $journalist->telefono = $request->get('telefono');
        $journalist->especialidad = $request->get('especialidad');
        $journalist->save();

        return redirect('/journalists');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $journalist = Journalist::find($id);
        $journalist->delete();

        return redirect('/journalists');
    }
}
