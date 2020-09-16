@extends ('index')

@section('cabecalho')
    Listar Empresas
@endsection

@section('conteudo')
    <div class="container">
        <form action=" {{ route('empresas.create') }} ">
            <button type="submit" >Criar nova empresa</button>
        </form>
        @foreach ($empresas as $empresa)
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
                    <a href=" {{ route('empresas.show', ['empresa' =>$empresa->id]) }}"> Ver Empresa </a>
                </div>
                <div class="col-sm">
                    <a href=" {{ route('empresas.edit', ['empresa' =>$empresa->id]) }}"> Editar Empresa </a>
                </div>
                <div class="col-sm">
                    <form method ="POST" action="{{ route('empresas.destroy', ['empresa' =>$empresa->id]) }} ">
                        @csrf
                        @method('delete')
                        <button type="submit" >Excluir Empresa</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
