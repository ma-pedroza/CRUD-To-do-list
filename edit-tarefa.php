<?php
session_start();
require_once('conexao.php');

$tarefa = [];

if (!isset($_GET['id'])){
    header('Location: index.php');
} else{
    $tarefaId = mysqli_real_escape_string($conn, $_GET['id']);
    $select_sql = " SELECT * FROM tarefas WHERE id = '{$tarefaId}'";
    $query = mysqli_query($conn, $select_sql);

    if (mysqli_num_rows($query)>0){
        $tarefa = mysqli_fetch_array($query);
    }
}

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar - Tarefa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Editar tarefa
                            <a href="index.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>

                    </div>
                    <div class="card-body">
                        <?php 
                        if($tarefa):
                        ?>
                        <form action="acoes.php" method="POST">
                            <input type="hidden" name="tarefaId" value="<?=$tarefa['id']?>">
                            <div class="mb-3">
                                <label for="txtNome">Nome</label>
                                <input type="text" name="txtNome" id="txtNome" value="<?=$tarefa['nome']?>" class="form-control">
                            </div>
                            <div class="mb-3">  
                                <label for="txtDescricao">Descricao</label>
                                <textarea name="txtDescricao" id="txtDescricao" class="form-control" rows="3"><?= $tarefa['descricao'] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="txtDataLimite">Data Limite</label>
                                <input type="date" name="txtDataLimite" id="txtDataLimite" class="form-control" value="<?= $tarefa['data_limite'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="txtStatus">Status</label>
                                <select name="txtStatus" id="txtStatus" class="form-control">
                                    <option value="">Como está sua tarefa?</option>
                                    <option value="0">A fazer</option>
                                    <option value="1">Fazendo</option>
                                    <option value="2">Feito!</option>
                                </select>

                            </div>
                            

                        </form>
                        <?php endif; ?>
                    </div>

                </div>

            </div>

        </div>

    </div>
    

















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>