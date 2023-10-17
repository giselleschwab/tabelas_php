<!-- Se existir a variavel editar faz uma coisa se não faz outra -->

<?php if(!isset($_GET['editar'])){ ?>
<div class="d-flex justify-content-center">
    <form class="mx-auto my-4" method="post" action="processa_curso.php">
        <h3>Insira um novo curso</h3>
    <div class="form-group mb-3">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Insira o nome do curso">
    </div>
    <div class="form-group mb-3">
        <label for="duracao">Duracao</label>
        <input type="text" class="form-control" name="duracao" placeholder="Duração do curso">
    </div>
    <div class="form-group mb-3">
        <label for="nascimento">Data de nascimento</label>
        <input type="text" class="form-control" name="data_nascimento" placeholder="Insira a data de nascimento">
    </div>
    <button type="submit" class="btn btn-danger">Submit</button>
    </form>
</div>

<?php } else { ?>
    <?php while($linha = mysqli_fetch_array($consulta_cursos)){ ?>
    <?php if($linha['ID'] == $_GET['editar']) { ?>
    <div class="d-flex justify-content-center">
        <form class="mx-auto my-4" method="post" action="edita_curso.php">
            <input type="hidden" name="ID" value="<?php echo $linha['ID'] ?>">
            <h3>Editar curso</h3>
            <div class="form-group mb-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Insira o nome do curso" value="<?php echo $linha['NOME'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="duracao">Duração</label>
                <input type="text" class="form-control" name="duracao" placeholder="Duração do curso" value="<?php echo $linha['DURACAO'] ?>">
            </div>
            <button type="submit" class="btn btn-danger">Editar curso</button>
        </form>
    </div>
         <?php } ?>
    <?php } ?>
<?php } ?>