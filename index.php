<?php
session_start();
require_once("conexao.php");

$sql = "SELECT * FROM tarefas";
$tarefas = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="container my-5">
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                    <h1 class="text-center mb-5">To do list</h1>
                    <div class="d-flex justify-content-center align-items-center border rounded p-0">
                        <span class="me-3">Adicionar Nova Tarefa</span>
                        <a href="create-tarefa.php" style="font-size: 2rem;"><i class="bi bi-patch-plus"></i></a>
                        
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                    <th>Data Limite</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tarefas as $tarefa): ?>
                                    <tr>
                                        <td><?php echo $tarefa['id']; ?></td>
                                        <td><?php echo $tarefa['nome']; ?></td>
                                        <td><?php echo $tarefa['descricao']; ?></td>
                                        <td><?php echo $tarefa['data_limite']; ?></td>
                                        <?php if ($tarefa['status'] == 0): ?>
                                        <td class="bg-info"><?php echo "A fazer"; ?></td>
                                        <?php endif ?>
                                        <?php if ($tarefa['status'] == 1): ?>
                                        <td class="bg-warning"><?php echo "Fazendo"; ?></td>
                                        <?php endif ?>
                                        <?php if ($tarefa['status'] == 2): ?>
                                        <td class="bg-success"><?php echo "Feito";?></td> 
                                        <?php endif ?>
                                        <td>
                                            <a href="edit-tarefa.php?id=<?=$tarefa['id']?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                            <form action="acoes.php" method="POST" class="d-inline">
                                                <button onclick="return confirm('Tem certeza que deseja excluir esta tarefa?')" name="delete-tarefa" type="submit" value="<?=$tarefa['id']?>" class="btn btn-danger"><i class="bi bi-file-earmark-x"></i></button>
                                            </form>
                                        </td>
                                        
                                    </tr>
                                <?php  endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    
                    
                    
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>