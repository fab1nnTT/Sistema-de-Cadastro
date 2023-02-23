<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    
        public function status() {
            return ['status' => 'ok'];
        }
    
        public function add(Request $request) {
    
            try {
                $produto = new Produto();
    
                $produto->NomeProduto = $request->NomeProduto;
                $produto->CodBarras = $request->CodBarras;
                $produto->ValorUnitario = $request->ValorUnitario;
    
                $produto->save();
    
                return ['retorno'=>'ok'];
    
            } catch(\Exception $erro) {
                
                return['retorno'=>'erro', 'details'=>$erro];
            }
        }
    
        public function list() {
    
            $produto = Produto::all();
    
            return $produto;
        }
    
        public function select($id) {
    
            $produto = Produto::find($id);
    
            return $produto;
        }
    
        public function update(Request $request, $id) {
    
            try {
    
                $produto = Produto::find($id);
    
                $produto->NomeProduto = $request->NomeProduto;
                $produto->CodBarras = $request->CodBarras;
                $produto->ValorUnitario = $request->ValorUnitario;
    
                $produto->save();
    
                return ['retorno'=>'ok', 'data'=>$request->all()];
    
            } catch(\Exception $erro) {
    
                return ['retorno'=> 'erro', 'details'=>$erro];
            }
        }
    
        public function delete($id) {
    
            try {
    
                $produto = Produto::find($id);
    
                $produto->delete();
    
                return ['retorno'=>'ok'];
    
            } catch(\Exception $erro) {
    
                return ['retorno'=> 'erro', 'details'=>$erro];
            }
        }
    
}
