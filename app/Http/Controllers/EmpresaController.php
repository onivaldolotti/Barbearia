<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //usamos o metodo all para resgatar todas as empresas cadastradas
        $empresas = Empresa::all();

        //retorno para a view, passando os dados resgatados
        return view('empresas.listarTodasEmpresas', [
            'empresas' => $empresas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //retorno para a view, passando os dados resgatados
        return view('empresas.criarEmpresa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empresa = new Empresa();

        $empresa->cnpj     = $request->cnpj;
        $empresa->nome     = $request->nome;
        $empresa->email    = $request->email;
        $empresa->telefone = $request->telefone;
        $empresa->cep      = $request->cep;
        $empresa->rua      = $request->rua;
        $empresa->numero   = $request->numero;
        $empresa->cidade   = $request->cidade;
        $empresa->estado   = $request->estado;

        $empresa->save();

        return redirect()-> route('empresas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        //retorno para a view, passando os dados resgatados
        return view('empresas.listarEmpresa', [
            'empresa' => $empresa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
       //retorno para a view, passando os dados resgatados
       return view('empresas.editarEmpresa', [
        'empresa' => $empresa
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        $empresa->cnpj     = $request->cnpj;
        $empresa->nome     = $request->nome;
        $empresa->email    = $request->email;
        $empresa->telefone = $request->telefone;
        $empresa->cep      = $request->cep;
        $empresa->rua      = $request->rua;
        $empresa->numero   = $request->numero;
        $empresa->cidade   = $request->cidade;
        $empresa->estado   = $request->estado;

        $empresa->save();

        return redirect()-> route('empresas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();

        return redirect()-> route('empresas.index');
    }
}
