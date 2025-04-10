<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f1f3f5;
        }

        .form-container {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
        }

        .navbar {
            border-radius: 0 0 10px 10px;
        }

        .btn-primary {
            background-color: #4a69bd;
            border: none;
        }

        .btn-primary:hover {
            background-color: #1e3799;
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
                            <a class="nav-link active" aria-current="page" href="/">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/consultar-cliente">Consulta</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="form-container">
            <p class="fs-4">Cadastro</p>
            <form action="/cadastrar-cliente" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
                </div>

                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco"
                        placeholder="Digite seu endereço">
                </div>

                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="number" class="form-control" id="telefone" name="telefone"
                        placeholder="Digite seu telefone">
                </div>

                <div class="mb-3">
                    <label for="bairro" class="form-label">Bairro</label>
                    <input type="text" class="form-control" id="bairro" name="bairro"
                        placeholder="Digite seu bairro">
                </div>

                <div class="mb-3">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade"
                        placeholder="Digite sua cidade">
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="number" class="form-control" id="cep" name="cep"
                            placeholder="Digite seu CEP" required>
                    </div>

                    <div class="col-md-6">
                        <label for="complemento" class="form-label">Complemento</label>
                        <input type="text" class="form-control" id="complemento" name="complemento"
                            placeholder="Digite o complemento">
                    </div>
                </div>

                <div class="mb-3 mt-3">
                    <label for="uf" class="form-label">UF</label>
                    <select class="form-select" id="uf" name="uf" required>
                        <option value="">Selecione</option>
                        <option value="SP">SP</option>
                        <option value="RJ">RJ</option>
                        <option value="MG">MG</option>
                        <option value="RS">RS</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="observacao" class="form-label">Observação</label>
                    <textarea class="form-control" id="observacao" name="observacao" rows="3"
                        placeholder="Digite a observação"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
