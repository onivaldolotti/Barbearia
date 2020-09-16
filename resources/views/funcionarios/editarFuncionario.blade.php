@extends('index')

@section('cabecalho')
    Editar funcionario
@endsection

@section('conteudo')
    <form action=" {{ route('funcionarios.update', ['funcionario'=>$funcionario->id]) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="cnpj">CPF </label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $funcionario->cpf }}">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $funcionario->nome }}">
        </div>
        <div class="form-group">
            <label for="email">E-mail </label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $funcionario->email }}">
            <label for="email">Senha </label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>
        <div class="form-group">
            <label for="empresa_id">Empresa </label>
            <select id="empresa_id" name="empresa_id">
                @foreach($empresas as $empresa)
                    <option value="{{ $empresa->id }}" {{ $empresa->id==$funcionario->empresa_id ? "selected" :"" }}> {{ $empresa->nome}}</option>
                @endforeach
            {{-- <label for="cargo">Cargo</label>
            <input type="text" class="form-control" id="cargo" name="cargo" value="{{ $funcionario->cpf }}"> --}}
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $funcionario->telefone }}">
        </div>

        <div class="form-group">
            <label for="cep">CEP </label>
            <input type="text" class="form-control" id="cep" name="cep" value="{{ $funcionario->cep }}">
            <label for="rua">Logradouro</label>
            <input type="text" class="form-control" id="rua" name="rua" value="{{ $funcionario->rua }}">
            <label for="numero">Nº </label>
            <input type="number" class="form-control" id="numero" name="numero" value="{{ $funcionario->numero }}">
        </div>
        <div class="form-group">
            <label for="cidade">Cidade </label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="{{ $funcionario->cidade }}">
            <label for="estado">Estado</label>
                <select id="estado" name="estado">
                    <option value="AC" {{ "AC"==$funcionario->estado ? "selected" :"" }}>Acre</option>
                    <option value="AL" {{ "AL"==$funcionario->estado ? "selected" :"" }}>Alagoas</option>
                    <option value="AP" {{ "AP"==$funcionario->estado ? "selected" :"" }}>Amapá</option>
                    <option value="AM" {{ "AM"==$funcionario->estado ? "selected" :"" }}>Amazonas</option>
                    <option value="BA" {{ "BA"==$funcionario->estado ? "selected" :"" }}>Bahia</option>
                    <option value="CE" {{ "CE"==$funcionario->estado ? "selected" :"" }}>Ceará</option>
                    <option value="DF" {{ "DF"==$funcionario->estado ? "selected" :"" }}>Distrito Federal</option>
                    <option value="ES" {{ "ES"==$funcionario->estado ? "selected" :"" }}>Espírito Santo</option>
                    <option value="GO" {{ "GO"==$funcionario->estado ? "selected" :"" }}>Goiás</option>
                    <option value="MA" {{ "MA"==$funcionario->estado ? "selected" :"" }}>Maranhão</option>
                    <option value="MT" {{ "MT"==$funcionario->estado ? "selected" :"" }}>Mato Grosso</option>
                    <option value="MS" {{ "MS"==$funcionario->estado ? "selected" :"" }}>Mato Grosso do Sul</option>
                    <option value="MG" {{ "MG"==$funcionario->estado ? "selected" :"" }}>Minas Gerais</option>
                    <option value="PA" {{ "PA"==$funcionario->estado ? "selected" :"" }}>Pará</option>
                    <option value="PB" {{ "PB"==$funcionario->estado ? "selected" :"" }}>Paraíba</option>
                    <option value="PR" {{ "PR"==$funcionario->estado ? "selected" :"" }}>Paraná</option>
                    <option value="PE" {{ "PE"==$funcionario->estado ? "selected" :"" }}>Pernambuco</option>
                    <option value="PI" {{ "PI"==$funcionario->estado ? "selected" :"" }}>Piauí</option>
                    <option value="RJ" {{ "RJ"==$funcionario->estado ? "selected" :"" }}>Rio de Janeiro</option>
                    <option value="RN" {{ "RN"==$funcionario->estado ? "selected" :"" }}>Rio Grande do Norte</option>
                    <option value="RS" {{ "RS"==$funcionario->estado ? "selected" :"" }}>Rio Grande do Sul</option>
                    <option value="RO" {{ "RO"==$funcionario->estado ? "selected" :"" }}>Rondônia</option>
                    <option value="RR" {{ "RR"==$funcionario->estado ? "selected" :"" }}>Roraima</option>
                    <option value="SC" {{ "SC"==$funcionario->estado ? "selected" :"" }}>Santa Catarina</option>
                    <option value="SP" {{ "SP"==$funcionario->estado ? "selected" :"" }}>São Paulo</option>
                    <option value="SE" {{ "SE"==$funcionario->estado ? "selected" :"" }}>Sergipe</option>
                    <option value="TO" {{ "TO"==$funcionario->estado ? "selected" :"" }}>Tocantins</option>
                </select>
        </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
