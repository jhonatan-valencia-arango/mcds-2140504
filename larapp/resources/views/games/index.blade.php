@extends('layouts.app')
@section('title', 'LARAPP - Lista de juegos')

@section('content')
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <h1><i class="fa fa-gamepad"></i> Lista de juegos</h1>
            <hr>
            <a href="{{ url('games/create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Adicionar juego</a>
            <form action="{{ url('import/excel/games') }}" method="POST" enctype="multipart/form-data" class="d-inline">
                @csrf
                <input type="file" class="d-none" id="file" name="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
                <button type="button" class="btn btn-success btn-excel">
                    <i class="fa fa-file-excel"></i>
                    Importar juegos
                </button>
            </form>
            <a href="{{ url('generate/pdf/games') }}" class="btn btn-primary"><i class="fa fa-file-pdf"></i> Exportar a PDF</a>
            <a href="{{ url('generate/excel/games') }}" class="btn btn-primary"><i class="fa fa-file-excel"></i> Exportar a Excel</a>
            <input type="hidden" id="tmodel" value="games">
            <input type="search" id="qsearch" name="qsearch" class="form-search" autocomplete="off" placeholder="Buscar">
            <br>
            <div class="loader d-none text-center mt-5">
                <img src="{{ asset('imgs/loader.gif')}}" width="100px">
            </div>
            <br><br>
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Imágen</th>
                    <th class="d-none d-sm-table-cell">Descripción</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody id="content">
                @foreach($games as $game)
                    <tr>
                        <td>{{ $game->name}}</td>
                        <td>
                            <img src="{{ asset($game->category->image) }}" width="36px">
                        </td>
                        <td><img src="{{ asset($game->image) }}" width="36px" alt=""></td>
                        <td class="d-none d-sm-table-cell">{{ $game->description}}</td>
                        <td>
                            <a href="{{ url('games/'.$game->id) }}" class="btn btn-sm btn-light"><i class="fa fa-search"></i></a>
                            <a href="{{ url('games/'.$game->id.'/edit') }}" class="btn btn-sm btn-light"><i class="fa fa-pen"></i></a>
                            <form action="{{ url('games/'.$game->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="button" class="btn btn-sm btn-danger btn-delete"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $games->links() }}
        </div>
    </div>
@endsection
