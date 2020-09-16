@extends('index')

@section('cabecalho')
    Criar Funcionário
@endsection

@section('conteudo')
    <form method="post" action=" {{ route('funcionarios.store') }}">
        @csrf
        <div class="form-group">
            <label for="cnpj">CPF </label>
            <input type="text" class="form-control" id="cpf" name="cpf">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="form-group">
            <label for="email">E-mail </label>
            <input type="email" class="form-control" id="email" name="email" >
            <label for="email">Senha </label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>
        <div class="form-group">
            <label for="empresa_id">Empresa </label>
            <select id="empresa_id" name="empresa_id">
                @foreach($empresas as $empresa)
                    <option value="{{ $empresa->id }}" > {{ $empresa->nome }}</option>
                @endforeach
            </select>
            <label for="cargo">Cargo</label>
            <input type="text" class="form-control" id="cargo" name="cargo">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone">
        </div>

        <div class="form-group">
            <label for="cep">CEP </label>
            <input type="text" class="form-control" id="cep" name="cep" >
            <label for="rua">Logradouro</label>
            <input type="text" class="form-control" id="rua" name="rua">
            <label for="numero">Nº </label>
            <input type="number" class="form-control" id="numero" name="numero" >
        </div>
        <div class="form-group">
            <label for="cidade">Cidade </label>
            <input type="text" class="form-control" id="cidade" name="cidade">
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
