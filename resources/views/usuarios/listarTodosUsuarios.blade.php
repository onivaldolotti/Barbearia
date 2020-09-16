@extends ('index')

@section('cabecalho')
    Listar Usuários
@endsection

@section('conteudo')
    <div class="container">
        <form action=" {{ route('user.create') }} ">
            <button type="submit" >Criar novo Usuário</button>
        </form>
        @foreach ($users as $user)
            <div class="row">
                <div class="col-sm">
                    {{ $user->id }}
                </div>
                <div class="col-sm">
                    {{ $user->cnpj }}
                </div>
                <div class="col-sm">
                    {{ $user->nome }}
                </div>
                <div class="col-sm">
                    {{ $user->email }}
                </div>
                <div class="col-sm">
                    <a href=" {{ route('user.show', ['user' =>$user->id]) }}"> Ver user </a>
                </div>
                <div class="col-sm">
                    <a href=" {{ route('user.edit', ['user' =>$user->id]) }}"> Editar user </a>
                </div>
                <div class="col-sm">
                    <form method="POST" action=" {{ route('user.destroy', ['user' =>$user->id]) }} ">
                        @csrf
                        @method('delete')
                        <button type="submit" >Excluir Usuário</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
