@extends('layouts.app')
@section('title', 'Consultar usuario - '.$user->fullname)
@section('content')
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('home') }}">
                            <i class="fa fa-clipboard-list"></i>
                            Inicio
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('users.index') }}">
                            <i class="fa fa-users"></i>
                            Usuarios
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="#">
                            <i class="fa fa-search"></i>
                            Consultar usuario
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1><i class="fa fa-search"></i> Consultar usuario</h1>
            <hr>
            <table class="table table-striped table-hover">
                <tr>
                    <td colspan="2" class="text-center">
                        <img src="{{ asset($user->photo) }}" class="img-thumbnail" width="180px">
                    </td>
                </tr>
                <tr>
                    <td class="text-uppercase font-weight-bold">Nombre completo:</td>
                    <td>{{ $user->fullname }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase font-weight-bold">Fecha de nacimiento:</td>
                    <td>{{ $user->birthdate }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase font-weight-bold">Género:</td>
                    <td>
                        @if($user->gender == 'female')
                           Mujer <i class="fa fa-venus fa-2x"></i>
                        @else
                           Hombre <i class="fa fa-mars fa-2x"></i>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="text-uppercase font-weight-bold">Rol:</td>
                    <td>
                        @if($user->role == 'Admin')
                            <i class="fas fa-ninja"></i> Administrador
                        @else
                            <i class="fas fa-user"></i> Cliente
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="text-uppercase font-weight-bold">Correo electrónico:</td>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase font-weight-bold">Teléfono:</td>
                    <td>{{ $user->phone }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase font-weight-bold">Dirección:</td>
                    <td>{{ $user->address }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase font-weight-bold">Estado:</td>
                    <td>
                        @if($user->active == 1)
                            <button class="btn btn-outline-success">
                                <i class="fa fa-check-circle"></i> Activo
                            </button>
                        @else
                            <button class="btn btn-outline-danger">
                                <i class="fa fa-ban"></i> Inactivo
                            </button>
                        @endif
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection
