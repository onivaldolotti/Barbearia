@extends('index')

@section('cabecalho')
    Editar Empresa
@endsection

@section('conteudo')
    <form action=" {{ route('user.update', ['user'=>$user->id]) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $user->nome }}">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $user->telefone }}">
        </div>
        <div class="form-group">
            <label for="email">E-mail </label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
            <label for="password">Senha </label>
            <input type="password" class="form-control" id="password" name="password" value="">
        </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
