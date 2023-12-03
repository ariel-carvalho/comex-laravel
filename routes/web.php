<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view ("welcome");
});

Route::get("/categorias", [CategoriaController::class, "index"])->name("categorias.index");

Route::post("/categorias/salvar", [CategoriaController::class, "store"])->name("categorias.store");
Route::get("/categorias/criar", [CategoriaController::class, "create"])->name("categorias.create");

Route::get("/categorias/{id}/editar", [CategoriaController::class, "edit"])->name("categorias.edit");
Route::delete("categorias/{id}", [CategoriaController::class, "destroy"])->name("categorias.destroy");
Route::put("categorias/{id}", [CategoriaController::class, "update"])->name("categorias.update");



//Route::resource("categorias", CategoriaController::class);
