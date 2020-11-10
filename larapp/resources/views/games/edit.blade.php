@extends('layouts.app')

@section('title', 'Editar Juego - '.$game->name)

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
                            <i class="fa fa-pen"></i>
                            Editar juego
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>
                <i class="fa fa-pen"></i>
                Editar juegos
            </h1>
            <hr>
            <form method="POST" action="{{ url('games/'.$game->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $game->id }}">
                <div class="form-group">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $game->name) }}" placeholder="Nombre" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>

                <div class="form-group">
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="4" placeholder="Descripción">{{ old('description', $game->description) }}</textarea>

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                                <label class="custom-file-label" for="customFile">
                                    <i class="fa fa-upload"></i>
                                    Imágen
                                </label>
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset($game->image) }}" class="img-thumbnail" id="preview" width="120px">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <select name="user_id" class="form-control @error('user_id') is-invalid @enderror">
                        <option value="">Seleccione Usuario...</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}" @if ($user->id == old('user_id', $game->user_id)) selected @endif>{{ $user->fullname }}</option>
                        @endforeach
                    </select>

                    @error('user_id')
                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>

                <div class="form-group">
                    <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                        <option value="">Seleccione Categoría...</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}" @if ($cat->id == old('category_id', $game->category_id)) selected @endif>{{ $cat->name }}</option>
                        @endforeach
                    </select>

                    @error('category_id')
                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>

                <div class="form-group">
                    <select name="slider" class="form-control @error('slider') is-invalid @enderror">
                        <option value="">Seleccione Destacado...</option>
                        <option value="1" @if (old('slider', $game->slider) == 1) selected @endif>Si</option>
                        <option value="2" @if (old('slider', $game->slider) == 2) selected @endif>No</option>
                    </select>

                    @error('slider')
                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price', $game->price) }}" placeholder="Precio" autofocus>

                    @error('price')
                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-larapp btn-block text-uppercase">
                        Editar
                        <i class="fa fa-save"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    </form>
        </div>
    </div>
@endsection
