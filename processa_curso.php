<?php

include 'db.php';

$nome_curso = $_POST['nome'];
$duracao = $_POST['duracao'];
$inicio = $_POST['data_inicio'];
$professor = $_POST['professor'];
$vagas = $_POST['numero_vagas'];
$area = $_POST['area'];
$valor = $_POST['valor'];
$desconto = $_POST['desconto'];

$query = "INSERT INTO curso(NOME, DURACAO, data_inicio, professor, numero_vagas, area, valor, desconto) VALUES('$nome_curso','$duracao', '$inicio', '$professor', '$vagas','$area', '$valor', '$desconto')";

mysqli_query($conn, $query);

header('location:index.php?pagina=cursos')

?>