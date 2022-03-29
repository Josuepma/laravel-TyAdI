<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class TestController extends Controller {

    public function mostrar($usuarioId) {
        $data = [
            'saludo' => 'Hola mundo', 
            'usuarioId' => $usuarioId,
            'datosUsuarios' => $this->datosUsuarios(),
            'alumnos' => $this->getAlumnos()
        ];
        return view('test', $data);
    }

    private function datosUsuarios() {
        $datos = [];
        for ($i = 0; $i < 100; $i++) {
            $datos[] = [
                'nombre' => 'Persona ' . $i,
                'otroDato' => rand(1, 9),
                'ix' => $i
            ];
        }
        return $datos;
    }

    private function getAlumnos()
    {
        $sqlCmd = 'select * from alumnos_v where carrera_id = ?';
        return DB::select($sqlCmd, [1]);
    }
}
