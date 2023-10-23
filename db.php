<?php
$servidor = "localhost";
$usuario = "root";
$senha = "gika";
$db = "aula_php";

$conn = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "SELECT * FROM CURSO";
$consulta_cursos = mysqli_query($conn, $query);

$query = "SELECT * FROM ALUNO";
$consulta_alunos = mysqli_query($conn, $query);

// $query = "SELECT NOME, DATA_NASCIMENTO as data_nascimento
//           FROM aluno
//           WHERE data_nascimento = CURDATE()

//           UNION

//           SELECT NOME, data_nascimento
//           FROM curso
//           WHERE data_nascimento = CURDATE()";

// $consulta_agenda = mysqli_query($conn, $query);

$query = "SELECT NOME, DATA_NASCIMENTO as data_nascimento
            FROM aluno
            WHERE data_nascimento = CURDATE()";

$agenda_alunos = mysqli_query($conn, $query);

$query = "SELECT NOME, data_nascimento
            FROM curso
            WHERE data_nascimento = CURDATE()";

$agenda_curso = mysqli_query($conn, $query);
?>