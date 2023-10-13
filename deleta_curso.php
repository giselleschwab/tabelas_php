<?php

include 'db.php';

$id_curso = $_GET['id_curso'];

$query = "DELETE FROM curso WHERE ID = $id_curso";

mysqli_query($conn, $query);

header('location:index.php?pagina=cursos');
?>