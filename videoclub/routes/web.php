<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use Illuminate\Support\Facades\Auth;

Auth::routes();

//Ruta Principal
Route::get('/',[HomeController::class, 'index']);

// Rutas del Catálogo protegidas por el middleware 'auth'
Route::group(['middleware' => 'auth'], function () {
  Route::get('/catalog', [CatalogController::class, 'getIndex'])->name('catalog.index');
  Route::get('/catalog/show/{id}', [CatalogController::class, 'getShow']);
  Route::get('/catalog/create', [CatalogController::class, 'getCreate']);
  Route::get('/catalog/edit/{id}', [CatalogController::class, 'getEdit'])->name('catalog.edit');


//Ruta nueva
Route::post('/catalog/create',[CatalogController::class,'postCreate']);
Route::put('/catalog/edit/{id}',[CatalogController::class,'putEdit']);


Route::put('/catalog/rent/{id}',[CatalogController::class,'putRent'])->name('catalog.rent');
Route::put('/catalog/return/{id}',[CatalogController::class,'putReturn'])->name('catalog.return');
Route::delete('/catalog/delete/{id}',[CatalogController::class,'deleteMovie'])->name('catalog.delete');

Route::get('/catalog/{id}', [CatalogController::class, 'show'])->name('catalog.show');


}); 



/*Ruta de autenticacion y cerrar sesion
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/logout', function () {
  //tengo que arregllar esta vista o el cierre
    return redirect()->route('login');
});*/

