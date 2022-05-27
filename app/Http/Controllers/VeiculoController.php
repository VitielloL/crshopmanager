<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use App\Models\Pessoa;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function index()
    {
        $dados = Veiculo::with('Pessoa')->get();
        return view('veiculo.index')->with('dados', $dados);
        
        //$dados = $pessoas->Veiculo()->get();
        //$dados = Veiculo::all();
        //$dadosDonoVeiculo = $dados->Veiculo()-first();
        //echo"<h1> {$dados->marca}</h1>";
        //return view('veiculo.index')->with('dados', $dados);
    }


    public function show($id)
    {
        $dado = Veiculo::where('id', $id)->with('Pessoa')->get();
        //$d = DB::table('pessoas')->pluck('nome');
        //$d2 = DB::select('select * from pessoas where id = ?', [$d[0]->id_pessoa])->get();

        //$d[0]->id_pessoa
        //$dado = Pessoa::whereBelongsTo($d[0]->id_pessoa)->get();
        //$dados = Veiculo::with('Pessoa')->get();
        //$dado = DB::table('pessoas')->where('id', [$d[0]->id_pessoa])->value('nome');
        //$dado = DB::table('pessoas')->find();

        //echo "<p>{$d}</p>";

        if (!empty($dado)) {
            return view('veiculo.show')->with('dado', $dado);
        } else {
            return redirect()->route('veiculo');
        }
    }

    public function create()
    {
        $dados = Pessoa::get();
        //echo "<p>{$dado}</p>";
        if (!empty($dados)) {
            return view('veiculo.create')->with('dados', $dados);
        } else {
            return redirect()->route('veiculo');
        }
    }

    public function store(Request $request)
    {
        $dados = $request->all();
        Veiculo::create($dados);
        return redirect()->route('veiculo');
    }

    public function edit($id)
    {
        $dado = Veiculo::where('id',$id)->with('Pessoa')->get();

        $dadosPessoas = DB::table('pessoas')->select('id','nome')->where('tipoStatus','=',1)->get();
               
        if(!empty($dado)){
            return view('veiculo.edit')->with('dado',$dado)->with('dadosPessoas', $dadosPessoas);
        } else {
            return redirect()->route('veiculo');
        }
    }

    public function update(Request $request, $id)
    {
        $dado = Veiculo::find($id);
 
        $dado->codigo = $request->codigo;
        $dado->modelo = $request->modelo;
        $dado->marca = $request->marca;
        $dado->cor = $request->cor;
        $dado->ano_fab = $request->ano_fab;
        $dado->ano_mod = $request->ano_mod;
        $dado->combustivel = $request->combustivel;
        $dado->placa = $request->placa;
        $dado->id_pessoa = $request->id_pessoa;

        $dado->save();
        return redirect()->route('veiculo');

    }

    public function destroy($id)
    {
        $dado = Veiculo::where('id', $id)->get();
        if (!empty($dado)) {
            DB::delete('DELETE FROM veiculo WHERE id = ?', [$id]);
        }
        return redirect()->route('veiculo');
    }

}