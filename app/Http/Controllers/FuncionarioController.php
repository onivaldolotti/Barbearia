<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\returnSelf;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionario::all();

        return view('funcionarios.listarTodosFuncionarios', ['funcionarios'=>$funcionarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = Empresa::all();

        return view('funcionarios.criarFuncionario', ['empresas'=>$empresas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $funcionario = new Funcionario();

        $funcionario->cpf        = $request->cpf;
        $funcionario->nome       = $request->nome;
        $funcionario->email      = $request->email;
        $funcionario->senha      = Hash::make($request->senha);
        $funcionario->empresa_id = $request->empresa_id;
        $funcionario->telefone   = $request->telefone;
        $funcionario->cep        = $request->cep;
        $funcionario->rua        = $request->rua;
        $funcionario->numero     = $request->numero;
        $funcionario->cidade     = $request->cidade;
        $funcionario->estado     = $request->estado;

        $funcionario->save();

        return redirect()->route('funcionarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function show(Funcionario $funcionario)
    {
        return view('funcionarios.listarFuncionario',['funcionario'=>$funcionario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function edit(Funcionario $funcionario)
    {
        $empresas = Empresa::all();
        return view('funcionarios.editarFuncionario',['funcionario'=>$funcionario, 'empresas' =>$empresas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funcionario $funcionario)
    {
        $funcionario->cpf        = $request->cpf;
        $funcionario->nome       = $request->nome;
        $funcionario->email      = $request->email;
        if(!empty($request->senha)){
            $funcionario->senha      = Hash::make($request->senha);
        }
        $funcionario->empresa_id = $request->empresa_id;
        $funcionario->telefone   = $request->telefone;
        $funcionario->cep        = $request->cep;
        $funcionario->rua        = $request->rua;
        $funcionario->numero     = $request->numero;
        $funcionario->cidade     = $request->cidade;
        $funcionario->estado     = $request->estado;

        $funcionario->save();

        return redirect()->route('funcionarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funcionario $funcionario)
    {
        $funcionario->delete();

        return redirect()->route('funcionarios.index');
    }
}
