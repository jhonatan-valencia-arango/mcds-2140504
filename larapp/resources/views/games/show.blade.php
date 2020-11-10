@extends('layouts.app')
@section('title', 'Consultar juego - '.$game->name)
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
                        <a href="{{ route('games.index') }}">
                            <i class="fa fa-gamepad"></i>
                            Juegos
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="#">
                            <i class="fa fa-search"></i>
                            Consultar juego
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1><i class="fa fa-search"></i> Consultar juego</h1>
            <hr>
            <table class="table table-striped table-hover">
                <tr>
                    <td colspan="2" class="text-center">
                        <img src="{{ asset($game->image) }}" class="img-thumbnail" width="180px">
                    </td>
                </tr>
                <tr>
                    <td class="text-uppercase font-weight-bold">Nombre:</td>
                    <td>{{ $game->name }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase font-weight-bold">Descripción:</td>
                    <td>{{ $game->description }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase font-weight-bold">Categoría:</td>
                    <td>{{ $game->category->name }}</td>
                </tr>
                <tr>
                    <th class="text-uppercase font-weight-bold">Usuario:</th>
                    <td>{{ $game->user->fullname }}</td>
                </tr>
                <tr>
                    <th class="text-uppercase font-weight-bold">Destacado:</th>
                    <td>
                        @if($game->slider == 1)
                            <button class="btn btn-success"><i class="fa fa-check-circle"></i> Sí</button>
                        @else
                            <button class="btn btn-warning"><i class="fa fa-ban"></i> No</button>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th class="text-uppercase font-weight-bold">Precio:</th>
                    <td class="font-weight-bold"><i class="fa fa-dollar-sign"></i> {{ $game->price }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
