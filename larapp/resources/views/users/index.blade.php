@extends('layouts.app')
@section('title', 'LARAPP - Lista de usuarios')

@section('content')
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <h1><i class="fa fa-users"></i> Lista de usuarios</h1>
            <hr>
            <a href="{{ url('users/create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Adicionar usuario</a>
            <a href="{{ url('generate/pdf/users') }}" class="btn btn-primary"><i class="fa fa-download"></i> Exportar</a>
            <hr>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Nombre completo</th>
                        <th class="d-none d-sm-table-cell">Correo electrónico</th>
                        <th class="d-none d-sm-table-cell">Teléfono</th>
                        <th>Foto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->fullname}}</td>
                            <td class="d-none d-sm-table-cell">{{ $user->email}}</td>
                            <td class="d-none d-sm-table-cell">{{ $user->phone}}</td>
                            <td><img src="{{ asset($user->photo) }}" width="36px" alt=""></td>
                            <td>
                                <a href="{{ url('users/'.$user->id) }}" class="btn btn-sm btn-light"><i class="fa fa-search"></i></a>
                                <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-sm btn-light"><i class="fa fa-pen"></i></a>
                                <form action="{{ url('users/'.$user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="btn btn-sm btn-danger btn-delete"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
@endsection
