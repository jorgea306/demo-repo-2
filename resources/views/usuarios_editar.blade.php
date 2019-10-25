@extends('plantilla')

@section('gestion')
@if (Auth::user()->name=='admin')
            <a class="nav-item nav-link" href="{{ route('usuarios_gestion') }}">Gestion de Usuario</a>

            @endif

@endsection


@section('seccion')

<button type="button" class="btn btn-dark m-md-3" onclick="history.go(-1); return false;"><span></span> Volver</button>

@if (session('mensaje'))

    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>

@endif



            <form action="{{ route ('usuarios_editar', $usuarios->id) }}" class="m-2" method="POST" enctype="multipart/form-data" >

                @method('PUT') {{-- metodo para actualizar un elemento  --}}
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

               <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="nombre" placeholder="Nombre" value="{{ $usuarios->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Ingrese Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ $usuarios->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" readonly name="contraseña" placeholder="Contraseña" required autocomplete="new-password" value="{{ $usuarios->password }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Editar') }}
                                </button>
                            </div>
                        </div>
            </form>

@endsection
