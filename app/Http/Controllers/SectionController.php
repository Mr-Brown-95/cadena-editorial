<?php

namespace App\Http\Controllers;

use App\Magazine;
use App\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magazine = Magazine::all();
        $section = Section::all();
        return view('sections.index')->with('sections', $section)->with('magazine', $magazine);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $magazine = Magazine::all();
        return view('sections.create')->with('magazines', $magazine);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $section = new Section();
        $section->numero_registro_id = $request->get('numero_registro_id');
        $section->titulo = $request->get('titulo');
        $section->extension = $request->get('extension');
        $section->save();

        return redirect('/sections');

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
        $section = Section::find($id);
        return view('sections.edit')->with('sections', $section)->with('magazines', $magazines);
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
        $section = Section::find($id);
        $section->numero_registro_id = $request->get('numero_registro_id');
        $section->titulo = $request->get('titulo');
        $section->extension = $request->get('extension');
        $section->save();

        return redirect('/sections');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section = Section::find($id);
        $section->delete();

        return redirect('/sections');
    }
}
