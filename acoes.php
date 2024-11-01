<?php
session_start();
require_once('conexao.php');

if (isset($_POST['create-tarefa'])){
    $nome = trim($_POST['txtNome']);
    $descricao = trim($_POST['txtDescricao']);
    $data_limite = trim($_POST['txtDataLimite']);
    $status = $_POST['txtStatus'];


    if (empty($nome)){
        $_SESSION['erro'] = "Por favor digite um nome para a sua tarefa.";
        header('Location: index.php');
        exit();
    }

    $insert_sql = " INSERT INTO tarefas (nome, descricao, data_limite, status) VALUES('$nome', '$descricao', '$data_limite', '$status')";

    mysqli_query($conn, $insert_sql);

    header('Location: index.php');
    exit();

}

if (isset($_POST['delete-tarefa'])){
    $tarefaId = mysqli_real_escape_string($conn,$_POST['delete-tarefa']);
    $delete_sql = " DELETE FROM tarefas WHERE id = '$tarefaId' ";

    mysqli_query($conn, $delete_sql);

    header('Location: index.php');
    exit();
}
?>