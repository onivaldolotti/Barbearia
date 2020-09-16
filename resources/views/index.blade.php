<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barbearia</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
        {{-- <div>
            <a class="text-light" href="/index">Home</a>
        </div> --}}
        <span ></a>
        <div class="float-right">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href=" {{ route('empresas.index') }}">Empresas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('funcionarios.index') }}">Funcionarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.index') }}">Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Serviço</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class ="jumbotron">
            @section('cabecalho')
                Bem vindo ao Sistema Para Cadastro de Vendas
            @endsection
			<h1>@yield('cabecalho')</h1>
		</div>
        @yield('conteudo')
    </div>
    <script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </script>
</body>
</html>
