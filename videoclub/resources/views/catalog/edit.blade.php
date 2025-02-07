@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Editar Película</h1>
        <form action="{{ route('catalog.edit', $pelicula->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Laravel usa esto para simular un método PUT -->

            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ $pelicula->title }}" required>
            </div>

            <div class="form-group">
                <label for="year">Año</label>
                <input type="number" id="year" name="year" class="form-control" value="{{ $pelicula->year }}" required>
            </div>

            <div class="form-group">
                <label for="director">Director</label>
                <input type="text" id="director" name="director" class="form-control" value="{{ $pelicula->director }}" required>
            </div>

            <div class="form-group">
                <label for="poster">Poster</label>
                <input type="text" id="poster" name="poster" class="form-control" value="{{ $pelicula->poster }}">
            </div>

            <div class="form-group">
                <label for="synopsis">Sinopsis</label>
                <textarea id="synopsis" name="synopsis" class="form-control" rows="4" required>{{ $pelicula->synopsis }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Película</button>
        </form>
    </div>
@endsection
