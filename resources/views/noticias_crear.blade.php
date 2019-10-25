@extends('plantilla')

@section('gestion')
@if (Auth::user()->name=='admin')
            <a class="nav-item nav-link" href="{{ route('usuarios_gestion') }}">Gestion de Usuario</a>

            @endif

@endsection

@section('seccion')

<button type="button" class="btn btn-dark m-md-3" onclick="history.go(-1); return false;"><span></span> Volver</button>

<h1 id="Titulo" class="container align-content-center text-center font-weight-bold text-dark ">Notas de {{ Auth::user()->name }}-Crear</h1>
{{--  mensaje  --}}
@if (session('mensaje'))

    <div class="alert alert-success">
        {{ session('mensaje') }}
     </div>

@endif
            {{--  formulario de creacion de noticias  --}}
            <form action="{{ route('noticias.crear') }}" class="m-2" method="POST" enctype="multipart/form-data" >

                @csrf

                @error('nombre')

                    <div class="alert alert-danger">
                        El nombre es obligatorio

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">//boton para cerra la ventana de dialogo
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                @enderror



                 @error('descripcion')

                    <div class="alert alert-danger">
                        La descripcion es obligatorio

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>



                @enderror

                <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="">
                <input type="text" name="introduccion" placeholder="Introduccion" class="form-control mb-2"value="">
                <textarea name="descripcion" placeholder="Descripcion" class="form-control mb-2"  cols="30" rows="10"></textarea>
                <input type="date" name="fecha" placeholder="Fecha" class="form-control mb-2" value="">
                <input type="file" name="fotos" placeholder="Fotos" class="form-control mb-2"value="">
                <button class="btn btn-primary btn-block" type="submit">Agregar</button>
            </form>

@endsection
