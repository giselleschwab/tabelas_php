<?php

include 'db.php';

$id_aluno = $_GET['id_aluno'];

$query = "DELETE FROM aluno WHERE ID = $id_aluno";

mysqli_query($conn, $query);

header('location:index.php?pagina=alunos');
?>