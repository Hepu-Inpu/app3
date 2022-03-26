@extends('layouts.app')

@section('titulo', 'editar')
@section('contenido')

<h3 class="text-center"><b> Editar Curso</h3>
    <form action="/docente/{{$docen->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre del docente</label>
            <input type="text" class="form-control" value="{{$docen->nombre}}"  id="nombre" name="nombre" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellido del docente</label>
            <input type="text" class="form-control" value="{{$docen->apellidos}}"  id="apellidos" name="apellidos" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="img">Foto del docente</label>
            <input type="file" id="img" name="img">
        </div>
        <div class="form-group">
            <label for="titulo">Titulo docente</label>
            <input type="text" class="form-control" value="{{$docen->titulo}}"  id="titulo" name="titulo" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="curso">Curso Asociado</label>
            <input type="text" class="form-control" id="curso" value="{{$docen->CursoAsociado}}"  name="curso" aria-describedby="emailHelp">
        </div>
        <button class="btn btn-outline-succeess" type="submit" style="background-color: rgb(166, 31, 255)">Update</button>
    </form>
@endsection
