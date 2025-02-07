<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class APICatalogController extends Controller
{
    // Obtener todas las películas
    public function index()
    {
        return response()->json(Movie::all());
    }

    // Obtener una película por su ID
    public function show($id)
    {
        return response()->json(Movie::findOrFail($id));
    }

    // Crear una nueva película
    public function store(Request $request)
    {
        $movie = Movie::create($request->all());
        return response()->json($movie, 201);
    }

    // Actualizar una película existente
    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());
        return response()->json(['error' => false, 'msg' => 'Película actualizada correctamente']);
    }

    // Eliminar una película
    public function destroy($id)
    {
        Movie::findOrFail($id)->delete();
        return response()->json(['error' => false, 'msg' => 'Película eliminada correctamente']);
    }

    // Marcar una película como alquilada
    public function putRent($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->rented = true;
        $movie->save();
        return response()->json(['error' => false, 'msg' => 'La película se ha marcado como alquilada']);
    }

    // Marcar una película como devuelta
    public function putReturn($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->rented = false;
        $movie->save();
        return response()->json(['error' => false, 'msg' => 'La película se ha marcado como devuelta']);
    }
}