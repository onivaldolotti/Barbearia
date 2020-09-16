@extends ('index')

@section('cabecalho')
    Listar funcionarios
@endsection

@section('conteudo')
    <div class="container">
        <form action=" {{ route('funcionarios.create') }} ">
            <button type="submit" >Criar novo funcinario</button>
        </form>
        @foreach ($funcionarios as $funcinario)
            <div class="row">
                <div class="col-sm">
                    {{ $funcinario->cnpj }}
                </div>
                <div class="col-sm">
                    {{ $funcinario->nome }}
                </div>
                <div class="col-sm">
                    {{ $funcinario->email }}
                </div>
                <div class="col-sm">
                    <a href=" {{ route('funcionarios.show', ['funcinario' =>$funcinario->id]) }}"> Ver funcinario </a>
                </div>
                <div class="col-sm">
                    <a href=" {{ route('funcionarios.edit', ['funcinario' =>$funcinario->id]) }}"> Editar funcinario </a>
                </div>
                <div class="col-sm">
                    <form action=" {{ route('funcionarios.destroy', ['funcinario' =>$funcinario->id]) }} ">
                        @csrf
                        @method('delete')
                        <button type="submit" >Excluir funcinario</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
