<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;

class ClienteController extends Controller
{
    
    public function index()
    {
        $data = Cliente::all();

        return view('clientes.index', compact(['data']));
    }

    public function validation(Request $request)
    {

        $rules = [
            'nome' => 'required|max:100|min:10',
            'idade'=>'required',
            'sexo'=>'required',
            'dataInter'=>'required',
            'diagnosticoClin'=>'required',
            'dataIOT'=>'required',
            'dataInter'=>'required',
            
        ];
        $msgs = [
            "required" => "O preenchimento do campo [:attribute] é obrigatório!",
            "max" => "O campo [:attribute] possui tamanho máximo de [:max] caracteres!",
            "min" => "O campo [:attribute] possui tamanho mínimo de [:min] caracteres!",
        ];

        $request->validate($rules, $msgs);
    }
    
    public function create()
    {   
        return view('alunos.create');
        
    }

    
    public function store(Request $request)
    {
        self::validation($request);

        $obj = new Cliente();
        $obj->nome = mb_strtoupper($request->nome, 'UTF-8');
        $obj->idade = $request->idade;
        $obj->sexo = $request->sexo;
        $obj->dataInter = $request->dataInter;
        $obj->diagnosticoInter = $request->diagnosticoInter;
        $obj->diagnosticoClin = $request->diagnosticoClin;
        $obj->dataIOT = $request->dataIOT;
        $obj->altura = $request->altura;
        $obj->pesoIdeal = $request->pesoIdeal;
        $obj->diasInter = $request->diasInter;
        $obj->save();

        return redirect()->route('clientes.index');
    }

  
   

  
    public function edit(Cliente $cliente)
    {
        if (isset($cliente)) {
            return view('clientes.edit', compact('cliente'));
        }

        return "<h1>Clientes não Encontrado!</h1>";
    
    }

  
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        self::validation($request);

        if (isset($cliente)) {
            $cliente->nome = mb_strtoupper($request->nome, 'UTF-8');
            $obj->idade = $request->idade;
            $obj->sexo = $request->sexo;
            $obj->dataInter = $request->dataInter;
            $obj->diagnosticoInter = $request->diagnosticoInter;
            $obj->diagnosticoClin = $request->diagnosticoClin;
            $obj->dataIOT = $request->dataIOT;
            $obj->altura = $request->altura;
            $obj->pesoIdeal = $request->pesoIdeal;
            $obj->diasInter = $request->diasInter;
            $cliente->save();
            return redirect()->route('clientes.index');
        }

        return "<h1>Cliente não Encontrado!</h1>";
    }
    
   
    public function destroy(Cliente $cliente)
    {
        if (isset($cliente)) {
            $cliente->delete();
            return redirect()->route('clientes.index');
        }

        return "<h1>Cliente não Encontrado!</h1>";
    }
    
}
