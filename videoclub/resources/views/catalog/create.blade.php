@extends('layouts.master')

@section('content')

<h2>Añadir nueva película</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ url('/catalog/create') }}" method="POST">
    @csrf {{-- Token de seguridad de Laravel --}}

    <div class="mb-3">
        <label for="title" class="form-label">Título</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>

    <div class="mb-3">
        <label for="year" class="form-label">Año</label>
        <input type="number" class="form-control" id="year" name="year" required>
    </div>

    <div class="mb-3">
        <label for="director" class="form-label">Director</label>
        <input type="text" class="form-control" id="director" name="director" required>
    </div>

    <div class="mb-3">
        <label for="poster" class="form-label">URL del póster</label>
        <input type="text" class="form-control" id="poster" name="poster">
    </div>

    <div class="mb-3">
        <label for="synopsis" class="form-label">Resumen</label>
        <textarea class="form-control" id="synopsis" name="synopsis" rows="4" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Añadir película</button>
    <a href="{{ url('/catalog') }}" class="btn btn-secondary">Cancelar</a>
</form>

@endsection