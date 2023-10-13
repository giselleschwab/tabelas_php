<?php

include 'db.php';

$nome_curso = $_POST['nome'];
$duracao = $_POST['duracao'];

$query = "INSERT INTO curso(NOME, DURACAO) VALUES('$nome_curso','$duracao')";

mysqli_query($conn, $query);

header('location:index.php?pagina=cursos')

?>