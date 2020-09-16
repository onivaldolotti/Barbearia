@extends('index')

@section('cabecalho')
    Detalhes do Funcionário
@endsection

@section('conteudo')
    <div class="row">
        <div class="col-sm">
            {{ $funcionario->id }}
        </div>
        <div class="col-sm">
            {{ $funcionario->cpf }}
        </div>
        <div class="col-sm">
            {{ $funcionario->nome }}
        </div>
        <div class="col-sm">
            {{ $funcionario->email }}
        </div>
        <div class="col-sm">
            {{ date('d/m/Y', strtotime($funcionario->created_at)) }}
        </div>
    </div>
@endsection
