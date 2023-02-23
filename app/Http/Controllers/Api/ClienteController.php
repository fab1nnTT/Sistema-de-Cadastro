<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use App\Models\Cliente;

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

            return ['retorno'=>'ok'];

        } catch(\Exception $erro) {
            
            return['retorno'=>'erro', 'details'=>$erro];
        }
    }

    public function list() {

        $cliente = Cliente::all();

        return $cliente;
    }

    public function select($id) {

        $cliente = Cliente::find($id);

        return $cliente;
    }

    public function update(Request $request, $id) {

        try {

            $cliente = Cliente::find($id);

            $cliente->nome = $request->nome;
            $cliente->cpf = $request->cpf;
            $cliente->email = $request->email;

            $cliente->save();

            return ['retorno'=>'ok', 'data'=>$request->all()];

        } catch(\Exception $erro) {

            return ['retorno'=> 'erro', 'details'=>$erro];
        }
    }

    public function delete($id) {

        try {

            $cliente = Cliente::find($id);

            $cliente->delete();

            return ['retorno'=>'ok'];

        } catch(\Exception $erro) {

            return ['retorno'=> 'erro', 'details'=>$erro];
        }
    }
}
