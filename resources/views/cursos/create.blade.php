









{{--para poder heredar la plantilla se usa extends --}}
@extends('layouts.app')

@section('titulo','crear registro')

@section('contenido')
        <br>
        <h3 class="text-center"><b>craer nuevo curso</h3>
            {{-- se utliza el codigo enctype para subir archivos--}}
        <form action="/curso" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="NomCurso">Nombre del curso</label>
                <input type="text" class="form-control" id="NomCurso" name="mamaste" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="DesCurso">descripcion del curso </label>
                <input type="text" class="form-control" id="DesCurso" name="mamastepordos" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="img">cargar imagen </label><br>
                <input type="file" id="img" name="img">
            </div>
            <button type="submit" class="btn btn-outline-success">Create</button>
        </form>
@endsection
