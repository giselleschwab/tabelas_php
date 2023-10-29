<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dog Cursos</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href=//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css />
    <link rel="stylesheet" href=https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css />
    <link rel="stylesheet" type="text/css" media="print" href="css/impressao.css">
   

  </head>
  <!-- <body class="bg-dark text-light">
    <div class="container">
        <div class="jumbotron bg-danger">
        <nav class="navbar navbar-expand-lg bg-danger">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                        <a class="nav-link text-white" href="?pagina=home">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="?pagina=cursos">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="?pagina=alunos">Alunos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="?pagina=matriculas">Matrículas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="?pagina=agenda">Agenda</a>
                    </li>
                    <?php if(isset($_SESSION['login'])){ ?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="logout.php"> 
                            <?php echo "sair" ?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            </nav>
        </div>    -->


<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?pagina=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?pagina=cursos">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?pagina=alunos">Alunos</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>