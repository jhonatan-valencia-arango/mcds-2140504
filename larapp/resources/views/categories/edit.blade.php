@extends('layouts.app')

@section('title', 'Editar Categoría - '.$category->name)

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
                            <i class="fa fa-pen"></i>
                            Editar categoría
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
                Editar categorías
            </h1>
            <hr>
            <form method="POST" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $category->id }}">
                <div class="form-group">
                    <input id="fullname" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $category->name) }}" placeholder="@lang('general.name')" autofocus>

                    @error('name')
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
                            <img src="{{ asset($category->image) }}" class="img-thumbnail" id="preview" width="120px">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <textarea rows="6" id="description" type="" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description', $category->description) }}" placeholder="@lang('general.description')" autofocus></textarea>
                    @error('description')
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
@endsection
