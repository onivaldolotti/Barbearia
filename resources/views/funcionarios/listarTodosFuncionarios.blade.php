@extends ('index')

@section('cabecalho')
    Listar funcionarios
@endsection

@section('conteudo')
    <div class="container">
        <form action=" {{ route('funcionarios.create') }} ">
            <button type="submit" >Criar novo funcionario</button>
        </form>
        @foreach ($funcionarios as $funcionario)
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
                    <a href=" {{ route('funcionarios.show', ['funcionario' =>$funcionario->id]) }}"> Ver funcionario </a>
                </div>
                <div class="col-sm">
                    <a href=" {{ route('funcionarios.edit', ['funcionario' =>$funcionario->id]) }}"> Editar funcionario </a>
                </div>
                <div class="col-sm">
                    <form method="post" action=" {{ route('funcionarios.destroy', ['funcionario' =>$funcionario->id]) }} ">
                        @csrf
                        @method('delete')
                        <button type="submit" >Excluir funcionario</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
