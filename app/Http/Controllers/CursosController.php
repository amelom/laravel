<?php

namespace App\Http\Controllers;

use App\Cursos;
use Illuminate\Http\Request;
use View;

class CursosController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Cursos::get();
        // return View::make('index')->with('cursos', $cursos);
        return view('cursos.index')->with('cursos', $cursos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cursos = new Cursos();
        $cursos->name = $request->input('name');
        $cursos->description = $request->input('description');
        $cursos->matter = $request->input('matter');
        $cursos->credits = $request->input('credits');
        $cursos->duration = $request->input('duration');
        $cursos->save();
        return redirect()->route('cursos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function show(Cursos $cursos)
    {
        $cursos = Cursos::get();
        echo json_encode($cursos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cursos  $cursos_id
     * @return \Illuminate\Http\Response
     */
    public function edit($cursos_id)
    {
        $cursos = Cursos::find($cursos_id);
        return view('cursos.edit')->with('cursos', $cursos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cursos  $cursos_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cursos_id)
    {
        $cursos = Cursos::find($cursos_id);
        $cursos->name = $request->input('name');
        $cursos->description = $request->input('description');
        $cursos->matter = $request->input('matter');
        $cursos->credits = $request->input('credits');
        $cursos->duration = $request->input('duration');
        $cursos->save();
        echo json_encode($cursos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cursos  $cursos_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cursos_id)
    {
        $cursos = Cursos::find($cursos_id);
        $cursos->delete();
    }
}
