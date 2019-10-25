@extends('plantilla')

@section('gestion')
@if (Auth::user()->name=='admin')
            <a class="nav-item nav-link" href="{{ route('usuarios_gestion') }}">Gestion de Usuario</a>

            @endif

@endsection

@section('seccion')

<div class="flex-center position-ref full-height">

    <div class="content ">
        <div class="title m-b-md">
            Tu Guia de Viajes
        </div>


    </div>



</div>
<a href="{{ route('noticias') }}" style="text-decoration:none ">
    <div class="card mb-3">
        <img src="img/viajes.jpg" class="card-img-top" alt="...">
        <div class="card-body ">
            <h5 class="card-title" id="descripcion">TuViaje.com</h5>
            <p class="card-text" id="descripcion">  Viajes.com es una pagina dedica a todos aquellos viajeros que
                quieran mantener un registro de sus viajes creando notas donde usted pueda poner un titulo,
                una foto, una fecha y una descripcion.
                El principal objetivo es que usted pueda tener un acceso rapido a todos sus destinos recorrido
                como asi tambien los que desea recorreo..
            </p>
        </div>
    </div>
</a>







@endsection
