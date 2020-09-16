@extends('index')

@section('cabecalho')
    Detalhes da Empresa
@endsection

@section('conteudo')
    <div class="row">
        <div class="col-sm">
            {{ $empresa->cnpj }}
        </div>
        <div class="col-sm">
            {{ $empresa->nome }}
        </div>
        <div class="col-sm">
            {{ $empresa->email }}
        </div>
        <div class="col-sm">
            {{ date('d/m/Y', strtotime($empresa->created_at)) }}
        </div>
    </div>
@endsection
