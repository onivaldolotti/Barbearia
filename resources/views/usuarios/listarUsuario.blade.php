@extends('index')

@section('cabecalho')
    Detalhes do Usuário
@endsection

@section('conteudo')
    <div class="row">

        <div class="col-sm">
            {{ $user->id }}
        </div>
        <div class="col-sm">
            {{ $user->nome }}
        </div>
        <div class="col-sm">
            {{ $user->email }}
        </div>
        <div class="col-sm">
            {{ $user->telefone }}
        </div>
        <div class="col-sm">
            {{ date('d/m/Y', strtotime($user->created_at)) }}
        </div>
    </div>
@endsection
