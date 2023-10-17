<?php

include 'db.php';

$nome_curso = $_POST['nome'];
$duracao = $_POST['duracao'];
$nascimento = $_POST['data_nascimento'];

$query = "INSERT INTO curso(NOME, DURACAO, data_nascimento) VALUES('$nome_curso','$duracao', '$nascimento')";

mysqli_query($conn, $query);

header('location:index.php?pagina=cursos')

?>