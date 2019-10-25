@extends('plantilla')

@section('gestion')
@if (Auth::user()->name=='admin')
            <a class="nav-item nav-link" href="{{ route('usuarios_gestion') }}">Gestion de Usuario</a>

            @endif

@endsection

@section('seccion')



<div class="container row m-md-3">

    <button type="button" class="btn btn-dark " onclick="history.go(-1); return false;"><span></span> Volver</button>

    <div class="col-3">

            <input  class="form-control" type="search" placeholder="Buscar" aria-label="Search">

    </div>

</div>


<h1 id="Titulo" class="container align-content-center text-center font-weight-bold text-dark ">Gestion de Notas de {{ Auth::user()->name }}</h1>


@if (session('mensaje'))

    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>

@endif

<table class="table table-dark">
                <thead>
                    <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($noticias as $item )

                    <tr>
                    <th scope="row">{{ $item->id}}</th>
                    <td>{{ $item->nombre}}</td>
                    <td>{{ $item->fecha}}</td>
                    <td>
                    <a href="{{ route ('noticias_editar',$item )}}" class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('noticias_eliminar',$item) }}" method="POST" class="d-inline">  {{-- la clase d-inline es para ponerlo en linea  --}}
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                    </form>

                    </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
{{ $noticias->links() }}
@endsection
