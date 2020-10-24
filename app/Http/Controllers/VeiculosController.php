<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veiculo;

class VeiculosController extends Controller
{
    public function index(){
        $veiculos = Veiculo::paginate(2);
        return view('veiculos.listagem', ['veiculos' => $veiculos]);
    }
    public function novo(){
        return view('veiculos.formulario');
    }
    public function salvar( Request $request){

        $veiculo = new Veiculo;
        $veiculo->marca = $request->marca_veiculo;
        $veiculo->nome = $request->modelo_veiculo;
        $veiculo->categoria = $request->categoria_veiculo;
        $veiculo->save();
        return redirect('/veiculos');

    }
    public function editar($id){
       $veiculo = Veiculo::find($id);
        return view('veiculos.formulario', ['veiculo' => $veiculo]);
    }
    public function atualizar($id, Request $request){
        $veiculo = Veiculo::find($id);
        $veiculo->marca = $request->marca_veiculo;
        $veiculo->nome = $request->modelo_veiculo;
        $veiculo->categoria = $request->categoria_veiculo;
        $veiculo->save();
        return redirect('/veiculos');
    }
    public function deletar($id){
        $veiculo = Veiculo::find($id);
        $veiculo->delete();
        return redirect('/veiculos');
    }
}
