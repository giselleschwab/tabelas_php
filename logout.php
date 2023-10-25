<?php

session_start();

//vai destruir a sessão
unset($_SESSION['login']);
unset($_SESSION['usuario']);

header('location:index.php');

?>