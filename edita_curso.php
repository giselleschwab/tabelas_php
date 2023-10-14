<?php

include 'db.php';

$id_curso = $_POST['ID'];
$nome_curso = $_POST['nome'];
$duracao = $_POST['duracao'];

$query = "UPDATE curso SET NOME='$nome_curso', DURACAO='$duracao' WHERE ID=$id_curso";

mysqli_query($conn, $query);

header('location:index.php?pagina=cursos');
?>