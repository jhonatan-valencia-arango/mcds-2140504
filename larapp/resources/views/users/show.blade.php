@extends('layouts.app')
@section('title', 'Consultar usuario')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1><i class="fa fa-search"></i> Consultar usuario</h1>
            <hr>
            {{ $user }}
        </div>
    </div>
@endsection
