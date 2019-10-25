@extends('plantilla')

@section('gestion')
@if (Auth::user()->name=='admin')
            <a class="nav-item nav-link" href="{{ route('usuarios_gestion') }}">Gestion de Usuario</a>

            @endif

@endsection

@section('seccion')

<button type="button" class="btn btn-dark m-md-3" onclick="history.go(-1); return false;"><span></span> Volver</button>

<h1 id="Titulo" class="container align-content-center font-weight-bold text-dark ">Notas de {{ Auth::user()->name }}-Detalle</h1>

<h2 id="Titulo" class="container align-content-center text-center font-weight-bold text-primary ">{{ $noticias->nombre }}</h2>

<img id="imagenes" class="" src="../../img/{{$noticias->fotos}}"  alt="...">

<div class="card m-md-3">
    <div class="card-body ">
        <p class="card-text text-center"   id="descripcion" >
            {{ $noticias->descripcion }}
        </p>
    </div>
</div>


@endsection
