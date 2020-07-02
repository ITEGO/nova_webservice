<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
    public function getClientes()
    {
        $clientes = Cliente::all();

        //Genero capa de abstracción para que sea sencillom 
        return response()->json($clientes);
    }
}
