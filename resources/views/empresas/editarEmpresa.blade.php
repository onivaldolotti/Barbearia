@extends('index')

@section('cabecalho')
    Editar Empresa
@endsection

@section('conteudo')
    <form action=" {{ route('empresas.update', ['empresa'=>$empresa->id]) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="cnpj">CNPJ </label>
            <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{ $empresa->cnpj }}">
            <label for="nome">Nome da Empresa</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $empresa->nome }}">
        </div>
        <div class="form-group">
            <label for="email">E-mail </label>
            <input type="email" class="form-control" id="email" name="email" value=" {{ $empresa->email }}" >
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value=" {{ $empresa->telefone }}">
        </div>
        <div class="form-group">
            <label for="cep">CEP </label>
            <input type="text" class="form-control" id="cep" name="cep" value=" {{ $empresa->cep}} " >
            <label for="rua">Logradouro</label>
            <input type="text" class="form-control" id="rua" name="rua" value=" {{ $empresa->rua }} ">
            <label for="numero">Nº </label>
            <input type="number" class="form-control" id="numero" name="numero" value=" {{ $empresa->numero }}" >
        </div>
        <div class="form-group">
            <label for="cidade">Cidade </label>
            <input type="text" class="form-control" id="cidade" name="cidade" value=" {{ $empresa->cidade }}">
            <label for="estado">Estado</label>
                <select id="estado" name="estado">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
        </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
