{{-- para poder heredar la plantilla se usa extends --}}
@extends('layouts.app')

@section('titulo', 'crear registro')

@section('contenido')
    <br>
    <h3 class="text-center"><b>Ingresar Docente</h3>
    {{-- se utliza el codigo enctype para subir archivos --}}
    <form action="/docente" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre del docente</label>
            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellido del docente</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="img">Foto del docente</label>
            <input type="file" id="img" name="img">
        </div>
        <div class="form-group">
            <label for="titulo">Titulo docente</label>
            <input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="curso">Curso Asociado</label>
            <input type="text" class="form-control" id="curso" name="curso" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-outline-success">Create</button>
    </form>
@endsection
