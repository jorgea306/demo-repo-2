@extends('plantilla')

@section('gestion')
@if (Auth::user()->name=='admin')
            <a class="nav-item nav-link" href="{{ route('usuarios_gestion') }}">Gestion de Usuario</a>

            @endif

@endsection

@section('seccion')

<button type="button" class="btn btn-dark m-md-3" onclick="history.go(-1); return false;"><span></span> Volver</button>

<h1 id="Titulo" class="container align-content-center text-center font-weight-bold text-dark ">Notas de {{ Auth::user()->name }}</h1>
<a href="{{ route('noticias_crear') }}" class="btn btn-dark m-md-3">Crear Notas</a>



<!-- Card -->
<div class="container row align-content-center">

    @foreach ($noticias as $item)

        <div class="card col-sm-3 m-3" style="width: 18rem;">
            <h5 class="card-title">{{ $item->fecha }}</h5>
            <img src="img/{{ $item->fotos }}" class="card-img-top img-thumbnail" alt="...">
            <div class="card-body">
                <h5 class="card-title text-sm-center font-weight-bold">{{ $item->nombre }}</h5>
                {{--  <p class="card-text text-justify">{{ $item->introduccion }}</p>  --}}
                <a href="{{ route('noticias_detalles',$item) }}" class="btn btn-dark">Leer mas</a>
            </div>
        </div>

    @endforeach

</div>

{{ $noticias->links() }}







<!-- Card -->



@endsection
