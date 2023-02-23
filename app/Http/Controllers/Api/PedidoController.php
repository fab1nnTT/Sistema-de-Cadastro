<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller


{
    public function status() {
        return ['status' => 'ok'];
    }

    public function add(Request $request) {

        try {
            $pedido = new Pedido();

            $pedido->NumeroPedido = $request->NumeroPedido;
            $pedido->DtPedido = $request->DtPedido;
            $pedido->Quantidade = $request->Quantidade;

            $pedido->save();

            return ['retorno'=>'ok'];

        } catch(\Exception $erro) {
            
            return['retorno'=>'erro', 'details'=>$erro];
        }
    }

    public function list() {

        $pedido = Pedido::all();

        return $pedido;
    }

    public function select($id) {

        $pedido = Pedido::find($id);

        return $pedido;
    }

    public function update(Request $request, $id) {

        try {

            $pedido = Pedido::find($id);

            $pedido->NomePedido = $request->Nomepedido;
            $pedido->DtPedido = $request->DtPedido;
            $pedido->Quantidade = $request->Quantidade;


            $pedido->save();

            return ['retorno'=>'ok', 'data'=>$request->all()];

        } catch(\Exception $erro) {

            return ['retorno'=> 'erro', 'details'=>$erro];
        }
    }

    public function delete($id) {

        try {

            $pedido = Pedido::find($id);

            $pedido->delete();

            return ['retorno'=>'ok'];

        } catch(\Exception $erro) {

            return ['retorno'=> 'erro', 'details'=>$erro];
        }
    }
}

//Testes