@extends('plantilla')

@section('gestion')
@if (Auth::user()->name=='admin')
            <a class="nav-item nav-link" href="{{ route('usuarios_gestion') }}">Gestion de Usuario</a>

            @endif

@endsection

@section('seccion')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card  m-md-5">
                <div class="card-header">Registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Su usuario ya se encuentra registrado!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
