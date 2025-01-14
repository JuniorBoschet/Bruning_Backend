<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Colaborador;

class ColaboradorController extends Controller
{
    //Obter todos os colaboradores
    public function pegarColaboradores(){
        $colaboradores = Colaborador::all();
        return response()->json($colaboradores);
    }

    //Adicionar novo colaborador
    public function adicionarColaborador(Request $request){
        $dados = $request->validate([
            'nome_completo' => 'required|string|max:255',
            'apelido' => 'required|string|max:255',
            'nome_pai' => 'required|string|max:255',            
            'nome_mae' => 'required|string|max:255',
            'cpf' => 'required|string|max:255',
            'data_nascimento' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
        ]);

        $colaborador = Colaborador::create($dados);
        return response()->json($colaborador, 201);
    }

    //Atualizar colaborador
    public function atualizarColaborador(Request $request, $id){
        $colaborador = Colaborador::find($id);

        if(!$colaborador){
            return response()->json(['erro' => "Colaborador não encontrado"]);
        }

        $dados = $request->validate([
            'nome_completo' => 'required|string|max:255',
            'apelido' => 'required|string|max:255',
            'nome_pai' => 'required|string|max:255',            
            'nome_mae' => 'required|string|max:255',
            'cpf' => 'required|string|max:255',
            'data_nascimento' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
        ]);
        $colaborador->update($dados);
        return response()->json($colaborador);
    }

    public function deletarColaborador($id){

        $colaborador = Colaborador::find($id);

        if(!$colaborador){
            return response()->json(['erro' => "Colaborador não encontrado"]);
        }

        $colaborador->delete();
        return response()->json(['mensagem' => 'Colaborador deletado']);
    }
}
