<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Cliente;

class ClienteController extends Controller
{
    public function status() {
        return ['status' => 'ok'];
    }

    public function add(Request $request) {

        try {
            $cliente = new Cliente();

            $cliente->nome = $request->nome;
            $cliente->cpf = $request->cpf;
            $cliente->email = $request->email;

            $cliente->save();

            return ['retorno'=>'erro', 'details'=>$erro];

        } catch(\Exception $erro) {

        }
    }
}
