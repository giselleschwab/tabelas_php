<?php
#base de dados
include 'db.php';

#cabeçalho
include 'header.php';

#conteúdo da página;
//se a pagina existir vai pra pagina se não vai pra home
if(isset($_GET['pagina'])){
   $pagina = $_GET['pagina']; 
}
else{
    $pagina = 'home';
}

switch($pagina){
    case 'cursos':  include 'views/cursos.php'; break;
    case 'alunos':  include 'views/alunos.php'; break;
    case 'inserir_cursos': include 'views/inserir_curso.php'; break;
    case 'inserir_aluno':  include 'views/inserir_aluno.php'; break;
    default: include 'views/home.php'; break;
}

#Rodapé
include 'footer.php';
