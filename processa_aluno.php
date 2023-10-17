<?php

include 'db.php';

$nome_aluno = $_POST['nome'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];


$query = "INSERT INTO aluno(NOME, EMAIL, DATA_NASCIMENTO) VALUES('$nome_aluno','$email','$data_nascimento')";

mysqli_query($conn, $query);

header('location:index.php?pagina=alunos')

?>