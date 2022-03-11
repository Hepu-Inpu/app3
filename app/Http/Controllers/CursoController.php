<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //creamos uun arraypara mmanipular la infromacion de la tabla curso
        //a su vez array actuara como un objeto
        $cursito = curso::all();

        return view('cursos.index',compact('cursito'));
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
        //return $request->all();
        //obtuvimos lo que el usuario envia por el input cuyo  name es mamaste
        //return $request->input('mamastepordos');
        //return $request->input('mamaste');
        $cursitosXD = new curso();
        //esto me permitira manipular la tabla
        $cursitosXD->hostia = $request->input('mamaste');
        $cursitosXD->descripcion = $request->input('mamastepordos');
        if($request->hasfile('img')){
            $cursitosXD->imagen = $request->file('img')->store('public');
        }
        $cursitosXD->save();
        return 'ostia tio podiste vete a casa hijodeputa';
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //creo un aray con informacion del registro
        //del id que viaja en la solicitud

        $cursito = curso::find($id);
        // asocio el array al view usando compat
        return view('cursos.show',compact('cursito'));
        //return view('cursos.show');
    }

    /**
     * muestra el recurso especificado
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //con el metodo all() veo todo la informacion

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
