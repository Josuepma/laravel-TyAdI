<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuardarDatosController extends Controller
{
    public function guardar(Request $req)
    {
        $titulo = $req->titulo;
        $descripcion = $req->descripcion;
        // TODO: Guardar datos en DB.
        return redirect('datos-guardados')
            ->with('mensaje', 'datos guardados')
            ->with('titulo', $titulo);
    }

    public function guardarAjax(Request $req) 
    {
        $titulo = $req->titulo;
        $descripcion = $req->descripcion;
        $sqlCmdInsert = 
                'INSERT INTO prueba (titulo, descripcion) VALUES(?, ?)';
        DB::insert($sqlCmdInsert, [$titulo, $descripcion]);
        $data = ['mensaje' => 'Datos guardados', 'titulo' => $titulo];
        return response()->json($data);
    }
}

/**
 * id int PK autoinc
 * titulo varchar(128) not null
 * descripcion varchar(1024) not null
 */