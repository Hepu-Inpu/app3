<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\docente;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursito = docente::all();

        return view('docente.index', compact('cursito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cursitosXD = new docente();
        //esto me permitira manipular la tabla
        $cursitosXD->nombre = $request->input('nombre');
        $cursitosXD-> apellidos = $request->input('apellidos');
        if ($request->hasfile('img')) {
            $cursitosXD->foto = $request->file('img')->store('public');
        }
        $cursitosXD-> titulo = $request->input('titulo');
        $cursitosXD-> CursoAsociado = $request->input('curso');
        $cursitosXD->save();
        return 'Datos Guardaos';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docen = docente::find($id);
        // asocio el array al view usando compat
        return view('docente.show', compact('docen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docen = docente::find($id);
        return view('docente.edit', compact('docen'));
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
        $docen = docente::find($id);
        $docen->fill($request->except('img'));
        if ($request->hasfile('img')){
            $docen-> imagen = $request->file('img')->store('public');
        }
        $docen->save();
        return 'dio';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
