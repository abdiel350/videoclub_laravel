@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-4">
        <img src="{{ $pelicula->poster }}" class="img-fluid" />
    </div>
    <div class="col-sm-8">
        <h2>{{ $pelicula->title }}</h2>
        <h4>Año: {{ $pelicula->year }}</h4>
        <h4>Director: {{ $pelicula->director }}</h4>
        <p><strong>Resumen:</strong> {{ $pelicula->synopsis }}</p>
        <p><strong>Estado:</strong>
            @if($pelicula->rented)
            Película actualmente alquilada
            <!-- Botón "Devolver película" con formulario -->
        <form action="{{ route('catalog.return', $pelicula->id) }}" method="POST" style="display:inline">
            @method('PUT')
            @csrf
            <button type="submit" class="btn btn-danger">Devolver película</button>
        </form>
        @else
        Película disponible
        <!-- Botón "Alquilar película" con formulario -->
        <form action="{{ route('catalog.rent', $pelicula->id) }}" method="POST" style="display:inline">
            @method('PUT')
            @csrf
            <button type="submit" class="btn btn-success">Alquilar película</button>
        </form>
        @endif
        </p>

        <!-- Botón para editar la película -->
        <a href="{{ route('catalog.edit', $pelicula->id) }}" class="btn btn-warning">Editar película</a>


        <!-- Botón para eliminar la película -->
        <form action="{{ route('catalog.delete', ['id' => $pelicula->id]) }}" method="POST" style="display:inline">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que quieres eliminar esta película?')">
                Eliminar película
            </button>
        </form>

        <!-- Botón para volver al listado -->
        <a href="{{ url('/catalog') }}" class="btn btn-light">Volver al listado</a>
    </div>
</div>

@endsection