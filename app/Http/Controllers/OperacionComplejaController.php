<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class OperacionComplejaController extends Controller {

    public function __invoke() {
        // Operacion muy compleja
        return 'Terminó operación compleja... El resultado es F';
    }


}