<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\ApiController;

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

Route::get('/', function () {
    return view('layout');
});

Route::get('/usuario', [UsuarioController::class, 'view']);
Route::post('/usuario', [UsuarioController::class, 'add']);
Route::delete('/usuario/{id}', [UsuarioController::class, 'delete']);
Route::get('/usuario/edit/{id}', [UsuarioController::class, 'edit']);
Route::put('/usuario/update/{id}', [UsuarioController::class, 'update']);

Route::get('/direccion', [DireccionController::class, 'view']);
Route::post('/direccion', [DireccionController::class, 'add']);
Route::delete('/direccion/{id}',[DireccionController::class, 'delete']);
Route::get('/direccion/edit/{id}', [DireccionController::class, 'edit']);
Route::put('/direccion/update/{id}', [DireccionController::class, 'update']);
Route::get('/asignar', [DireccionController::class, 'asignarView']);
Route::post('/asignar',[DireccionController::class, 'asignar']);

Route::get('/post', [PostController::class, 'view']);
Route::post('/post', [PostController::class, 'create']);
Route::delete('/post/{id}', [PostController::class, 'delete']);
Route::get('/post/edit/{id}',[PostController::class, 'edit']);
Route::put('/post/update/{id}', [PostController::class, 'update']);

Route::get('/tema', [TemaController::class, 'index']);
Route::post('/tema', [TemaController::class, 'store']);
Route::delete('/tema/{id}', [TemaController::class, 'destroy']);
Route::get('/tema/edit/{id}', [TemaController::class, 'edit']);
Route::put('/tema/update/{id}', [TemaController::class, 'update']);

Route::get('/api/posts/recientes', [ApiController::class, 'getPostRecientes']);
Route::get('/api/posts/{id}', [ApiController::class, 'getPostUsuario']);