<div class="d-flex justify-content-center">
    <form method="post" action="login.php">
    <div class="form-group mb-3">
        <label for="usuario">Email</label>
        <input type="email" class="form-control" id="usuario" name="usuario" placeholder="Insira seu email">
    </div>
    <div class="form-group mb-3">
        <label for="senha">Password</label>
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <?php if(isset($_GET['erro'])){ ?>
        <div class="alert alert-danger" role="alert">
        Usuário e/ou senha inválido!
        </div>
    <?php } ?>
    </form>
</div>