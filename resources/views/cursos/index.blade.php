@extends('layouts.app')
@section('titulo', 'index')
@section('contenido')
    <div class="text-center">
        <div>
            {{-- foreach es un ciclo o bucle especial para trabajar con array --}}
            {{-- ciclo como while,for, do while --}}
            <div class="row col-sm">{{-- ya tenemos la fila --}}
                @foreach ($cursito as $velas)
                    {{-- para llamar informacion de php basta con interpolar las variables usando las doble llaves --}}

                    <div class="col">{{-- ya tenemos la columna --}}
                        <div class="card" style="width: 18rem; margin-top: 10px;">
                            <img  style="height: 100px;  width:100px; margin:20px;"src="{{ Storage::url($velas->imagen) }}"
                                class="card-img-top mx-auto d-block" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $velas->hostia }} </h5>
                               
                                {{--se necesita el id para ver el registro en particular--}}
                                <a href="/curso/{{$velas->id}}" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endsection
