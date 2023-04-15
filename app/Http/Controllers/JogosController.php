<?php

namespace App\Http\Controllers;


use App\Models\Jogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class JogosController extends Controller
{
    public function index() {
        //recebendo os dados do model aqui
        $jogos = Jogo::all();
        //dd($jogos);
        return view('jogos.index', ['jogos' => $jogos , 'id' => 1]);
    }

    //criar os registros
    public function create() {

        return view('jogos.create');
    }

    public function store(Request $request) {
        
        //dd($request->all());
        // $jogo = new Jogo;
        // $jogo->nome = $request->nome;
        // $jogo->categoria = $request->categoria;
        // $jogo->anoCriacao = $request->anoCriacao;
        // $jogo->valor = $request->valor;

        // $jogo->save();
        Jogo::create($request->all());
        return redirect()->route('jogos-index');
    }
    public function edit($id) {
        //criar um jogo onde o id no model seja igual ao parametro
        $jogo = Jogo::where('id', $id)->first();

        //agr eh importante verificar se o id n foi encontrado
        if(!empty($jogo)){
            return view('jogos.edit', ['jogo'=>$jogo]);
        } else {
            return redirect()->route('jogos-index');
        }
    }
    public function update(Request $request, $id) {
        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'anoCriacao' => $request->anoCriacao,
            'valor' => $request->valor,
        ];

        Jogo::where('id', $id)->update($data);

        return redirect()->route('jogos-index');
    }
    public function destroy($id) {
        
        Jogo::where('id', $id)->delete();

        return redirect()->route('jogos-index');
    }
}
