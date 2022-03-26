@extends('layouts.app')

@section('titulo', 'Detalles')
@section('contenido')


        <img style="height: 400px;  width:500px; margin:20px;" src="{{ Storage::url($docen->foto) }}"
            class="card-img-top mx-auto d-block" alt="...">
        <div class="card-body text-center">
            {{----}}<h5 class="card-title">{{ $docen->nombre }} </h5>
            <p class="card-text">{{ $docen->apellido }} </p>
            <a href="/docente/{{ $docen->id }}/edit" class="btn btn-primary">editar</a>
        </div>

@endsection
