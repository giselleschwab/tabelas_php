<?php

include 'db.php';

$id_aluno = $_POST['ID'];
$nome_aluno = $_POST['nome'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];

$query = "UPDATE aluno SET NOME='$nome_aluno', EMAIL='$email', DATA_NASCIMENTO='$data_nascimento' WHERE ID=$id_aluno";

mysqli_query($conn, $query);

header('location:index.php?pagina=alunos');
?>