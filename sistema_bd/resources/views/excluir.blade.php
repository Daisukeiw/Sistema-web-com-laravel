<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela de Exclusão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="http://127.0.0.1:8000/">Sistema Web</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="http://127.0.0.1:8000/">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="http://127.0.0.1:8000/consultar-cliente/7">Consulta</a>
                        <li class="nav-item">
                            <a class="nav-link " href="http://127.0.0.1:8000/editar-cliente/7">Editar</a>
                        <li class="nav-item">
                            <a class="nav-link active" href="http://127.0.0.1:8000/excluir-cliente/7">Excluir</a>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <div class="container">
            <p class="fs-4">Excluir</p>

            <form action="/excluir-cliente/{{ $cliente->id }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{ $cliente->id }}" disabled>
                </div>

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $cliente->nome }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $cliente->email }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" value="{{ $cliente->endereco }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $cliente->telefone }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="bairro" class="form-label">Bairro</label>
                    <input type="text" class="form-control" id="bairro" name="bairro" value="{{ $cliente->bairro }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" value="{{ $cliente->cidade }}" readonly>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" class="form-control" id="cep" name="cep" value="{{ $cliente->cep }}" readonly>
                    </div>

                    <div class="col-md-6">
                        <label for="complemento" class="form-label">Complemento</label>
                        <input type="text" class="form-control" id="complemento" name="complemento" value="{{ $cliente->complemento }}" readonly>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="uf" class="form-label">UF</label>
                    <select class="form-select" id="uf" name="uf" disabled>
                        <option value="">Selecione</option>
                        <option  value="SP" {{ $cliente->uf == 'SP' ? 'selected' : '' }}>SP</option>
                        <option  value="RJ" {{ $cliente->uf == 'RJ' ? 'selected' : '' }}>RJ</option>
                        <option  value="MG" {{ $cliente->uf == 'MG' ? 'selected' : '' }}>MG</option>
                        <option  value="RS" {{ $cliente->uf == 'RS' ? 'selected' : '' }}>RS</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="observacao" class="form-label">Observação</label>
                    <textarea class="form-control" id="observacao" name="observacao" rows="3" readonly>{{ $cliente->observacao }}</textarea>
                </div>

                <button class="btn btn-danger">Deletar</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
