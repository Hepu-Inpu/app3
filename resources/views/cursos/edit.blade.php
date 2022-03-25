@extends('layouts.app')

@section('titulo', 'editar')
@section('contenido')

<h3 class="text-center"><b> Editar Curso</h3>
    <form action="/curso/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="nombre">modifique el nombre</label>
            <input name="hostia" value="{{$cursito->hostia}}" type="text" class="form-control" id="hostia" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="desc">modifique la descripcion</label>
            <input name="descripcion" value="{{$cursito->descripcion}}" type="text" class="form-control" id="descripcion">
        </div>
        <div class="form-group">
            <label for="ldcourse">ectualicé la imagen </label>
            <br>
            <input name="img"  value="{{$cursito->imagen}}" type="file" id="courseimg">
        </div>
        <button class="btn btn-outline-succeess" type="submit" style="background-color: rgb(166, 31, 255)">Update</button>
    </form>
@endsection
