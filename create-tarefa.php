<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar - Tarefa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card bg-dark  text-white">

                    <div class="card-header">
                        <h4>
                            Criar Nova tarefa
                            <a href="index.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="acoes.php" method="POST">
                            <div class="mb-3">
                                <label for="txtNome">Nome</label>
                                <input type="text" name="txtNome" id="txtNome" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="txtDescricao">Descrição</label>
                                <textarea class="form-control" name="txtDescricao" id="txtDescricao" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="txtDataLimite">Data Limite</label>
                                <input type="date" name="txtDataLimite" id="txtDataLimite" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="txtStatus">Status</label>
                                <select name="txtStatus" id="txtStatus" class="form-control">
                                    <option value="">Como esta sua tarefa?</option>
                                    <option value="0">A fazer</option>
                                    <option value="1">Fazendo</option>
                                    <option value="2">Feito!</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button name="create-tarefa" type="submit" class="btn btn-primary float-end"><i class="bi bi-floppy2-fill"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>