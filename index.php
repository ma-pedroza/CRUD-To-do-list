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
                        <span class="me-4">Adicionar Nova Tarefa</span>
                        <a href="create-tarefa.php" style="font-size: 2rem;"><i class="bi bi-patch-plus"></i></a>
                        
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover table-sm">
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
                                        <td style="max-height: 10px; max-width: 100px; text-wrap: breakline; cursor:pointer " data-bs-toggle="modal" data-bs-target="#modal<?php echo $tarefa['id'];?>"><?php echo$tarefa['descricao']; ?>
                                        <div class="modal fade" id="modal<?php echo$tarefa['id'];?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel<?php echo $tarefa['id'];?>" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4><?php echo$tarefa['nome'];?></h4>
                                                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Fechar"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p><?php echo$tarefa['descricao'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </td>
                                        
                                        <td><?php echo $tarefa['data_limite']; ?></td>
                                        <?php if ($tarefa['status'] == 0): ?>
                                        <td class="text-center"><span class="badge rounded-pill bg-primary">A fazer</span></td>
                                        <?php endif ?>
                                        <?php if ($tarefa['status'] == 1): ?>
                                        <td class="text-center"><span class="badge rounded-pill bg-warning">Fazendo</span></td>
                                        <?php endif ?>
                                        <?php if ($tarefa['status'] == 2): ?>
                                        <td class="text-center"><span class="badge rounded-pill bg-success">Feito!</span></td> 
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