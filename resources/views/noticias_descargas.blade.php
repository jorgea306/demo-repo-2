@extends('plantilla')

@section('gestion')
@if (Auth::user()->name=='admin')
            <a class="nav-item nav-link" href="{{ route('usuarios_gestion') }}">Gestion de Usuario</a>

            @endif

@endsection

@section('seccion')

<button type="button" class="btn btn-dark m-md-3" onclick="history.go(-1); return false;"><span></span> Volver</button>

{{--  titulo princiapl --}}
<h1 id="Titulo" class="container align-content-center text-center font-weight-bold text-dark ">Descargas</h1>
{{--  mensaje  --}}
@if (session('mensaje'))

    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>

@endif

{{--  Titulo de la categoria  --}}
<h4 id="Titulo" class="container font-weight-bold text-dark m-md-5 ">Titulo de Categoria</h1>

    {{--  archivo con boton desplegable  --}}
    <div class=" container row dropdown m-md-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Descarga
        </button>
        <p class="m-md-2"> Nombre del archivo (145kb)</p>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">PDF</a>
            <a class="dropdown-item" href="#">XLS</a>
            <a class="dropdown-item" href="#">JSON</a>
        </div>
    </div>

    <div class=" container row dropdown m-md-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Descarga
        </button>
        <p class="m-md-2"> Nombre del archivo (145kb)</p>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">PDF</a>
            <a class="dropdown-item" href="#">XLS</a>
            <a class="dropdown-item" href="#">JSON</a>
        </div>
    </div>

    <div class=" container row dropdown m-md-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Descarga
        </button>
        <p class="m-md-2"> Nombre del archivo (145kb)</p>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">PDF</a>
            <a class="dropdown-item" href="#">XLS</a>
            <a class="dropdown-item" href="#">JSON</a>
        </div>
    </div>

    <div class=" container row dropdown m-md-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Descarga
        </button>
        <p class="m-md-2"> Nombre del archivo (145kb)</p>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">PDF</a>
            <a class="dropdown-item" href="#">XLS</a>
            <a class="dropdown-item" href="#">JSON</a>
        </div>
    </div>


    {{--  //------------------------------------------------------------------------------------------------//  --}}


<h4 id="Titulo" class="container font-weight-bold text-dark m-md-5 ">Titulo de Categoria</h1>

    <div class=" container row dropdown m-md-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Descarga
        </button>
        <p class="m-md-2"> Nombre del archivo (145kb)</p>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">PDF</a>
            <a class="dropdown-item" href="#">XLS</a>
            <a class="dropdown-item" href="#">JSON</a>
        </div>
    </div>

    <div class=" container row dropdown m-md-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Descarga
        </button>
        <p class="m-md-2"> Nombre del archivo (145kb)</p>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">PDF</a>
            <a class="dropdown-item" href="#">XLS</a>
            <a class="dropdown-item" href="#">JSON</a>
        </div>
    </div>

    <div class=" container row dropdown m-md-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Descarga
        </button>
        <p class="m-md-2"> Nombre del archivo (145kb)</p>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">PDF</a>
            <a class="dropdown-item" href="#">XLS</a>
            <a class="dropdown-item" href="#">JSON</a>
        </div>
    </div>

    <div class=" container row dropdown m-md-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Descarga
        </button>
        <p class="m-md-2"> Nombre del archivo (145kb)</p>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">PDF</a>
            <a class="dropdown-item" href="#">XLS</a>
            <a class="dropdown-item" href="#">JSON</a>
        </div>
    </div>


@endsection
