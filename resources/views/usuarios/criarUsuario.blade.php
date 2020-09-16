@extends('index')

@section('cabecalho')
    Cadastro de Usuário
@endsection

@section('conteudo')
    <form method="post" action=" {{ route('user.store') }}">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone">
        </div>
        <div class="form-group">
            <label for="email">E-mail </label>
            <input type="email" class="form-control" id="email" name="email" >
            <label for="senha">Senha </label>
            <input type="password" class="form-control" id="senha" name="senha" >
        </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
