@extends('layouts.app')
@section('title', 'Consultar categoría - '.$category->name)
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
                        <a href="{{ route('categories.index') }}">
                            <i class="fa fa-users"></i>
                            Categorías
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="#">
                            <i class="fa fa-search"></i>
                            Consultar categoría
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1><i class="fa fa-search"></i> Consultar categoría</h1>
            <hr>
            <table class="table table-striped table-hover">
                <tr>
                    <td colspan="2" class="text-center">
                        <img src="{{ asset($category->image) }}" class="img-thumbnail" width="180px">
                    </td>
                </tr>
                <tr>
                    <td class="text-uppercase font-weight-bold">Nombre:</td>
                    <td>{{ $category->name }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase font-weight-bold">Descripción:</td>
                    <td>{{ $category->description }}</td>
                </tr>
                <tr>
                    <td class="text-uppercase font-weight-bold">Estado:</td>
                    <td>
                        @if($category->active == 1)
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
