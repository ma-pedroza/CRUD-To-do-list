<?php

$host = 'localhost: 3309';

$usuario = 'root';
$senha = '';
$banco = 'to_do_list';

$conn = mysqli_connect($host, $usuario, $senha, $banco) or die ('Não foi possível se conectar ao MySql');

?>