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



<h1 id="Titulo" class="container align-content-center text-center font-weight-bold text-dark ">Gestion de Usuarios</h1>


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
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $item )

                    <tr>
                    <th scope="row">{{ $item->id}}</th>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->email}}</td>
                    <td>
                    <a href="{{ route ('usuarios_editar',$item )}}" class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('usuarios_eliminar',$item) }}" method="POST" class="d-inline">  {{-- la clase d-inline es para ponerlo en linea  --}}
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                    </form>

                    </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
{{ $usuarios->links() }}
@endsection
