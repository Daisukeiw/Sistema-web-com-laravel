<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela de Consulta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f1f3f5;
        }

        .navbar {
            border-radius: 0 0 10px 10px;
        }

        .card {
            background-color: white;
            color: #333;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #4a69bd;
            border: none;
        }

        .btn-primary:hover {
            background-color: #1e3799;
        }

        .btn-danger {
            background-color: #eb2f06;
            border: none;
        }

        .btn-danger:hover {
            background-color: #b71540;
        }

        .alert {
            border-radius: 10px;
        }

        .titulo-consulta {
            margin-top: 30px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Sistema Web</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Alternar navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/consultar-cliente">Consulta</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <p class="fs-4 titulo-consulta">Consulta</p>

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
            </div>
            @endif

            @if($clientes->isEmpty())
            <div class="alert alert-warning" role="alert">
                Nenhum cliente cadastrado.
            </div>
            @else
            <div class="row">
                @foreach($clientes as $cliente)
                <div class="col-md-4 mb-4">
                    <div class="card p-3">
                        <h5 class="card-title">{{ $cliente->nome ?? 'Nome não informado' }}</h5>
                        <p class="card-text">
                            <strong>Email:</strong> {{ $cliente->email ?? 'Não informado' }}<br>
                            <strong>Telefone:</strong> {{ $cliente->telefone ?? 'Não informado' }}<br>
                            <strong>UF:</strong> {{ $cliente->uf ?? 'Não informado' }}<br>
                            <strong>Observações:</strong> {{ $cliente->observacao ?? 'Sem observações' }}
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="{{ url('/editar-cliente/' . $cliente->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <a href="{{ url('/excluir-cliente/' . $cliente->id) }}" class="btn btn-danger btn-sm">Excluir</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>