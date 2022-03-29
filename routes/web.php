<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\OperacionComplejaController;
use App\Http\Controllers\TestInvokableController;
use App\Http\Controllers\GuardarDatosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('todos', \App\Http\Controllers\TodoController::class);

Route::get('/saludo', function () {
    return 'Hola Mundo';
});

Route::get('/testreq', function (Request $req) {
    return $req->fullUrl();
});

Route::get('/get-ip', function (Request $req) {
    return 'su ip es ' . $req-> ip();
});

Route::get('/usuarios/{usuarioId}', [TestController::class, 'mostrar'])
    ->name('usuarios.mostrar');

Route::get('/operacioncompleja', [TestInvokableController::class]);

Route::post('/posts', [GuardarDatosController::class, 'guardar'])
    ->name('guardar-post');

Route::post('/post-ajax', [GuardarDatosController::class, 'guardarAjax'])
    ->name('ajax.guardar-post');

Route::get('/datos-guardados', function () { 
    return view('datos-guardados'); 
});

Route::get('/nuevo-post', function () {
    return view('nuevo-post');
});

Route::get('/posts/{postId}', function (Request $req, $postId) {

});

Route::match(['get', 'post'], '/get-post', function (Request $req) {

});
