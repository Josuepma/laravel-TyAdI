<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    //AQUÍ
    return $request->user();
});

Route::get('/todos', function(Request $req){
    $todos = [
        ['todo' => 'Hacer X cosa'],
        ['todo' => 'Hacer Y cosa']
    ];
    return response()->json($todos);
});