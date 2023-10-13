<div class="d-flex justify-content-center">
    <form class="mx-auto my-4" method="post" action="processa_aluno.php">
        <h3>Insira um novo aluno</h3>
    <div class="form-group mb-3">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Insira o nome do aluno">
    </div>
    <div class="form-group mb-3">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" name="email" placeholder="Insira o email do aluno">
    </div>
    <div class="form-group mb-3">
        <label for="nascimento">Data de nascimento</label>
        <input type="text" class="form-control" name="data_nascimento" placeholder="Insira a data de nascimento">
    </div>
    <button type="submit" class="btn btn-danger">Submit</button>
    </form>
</div>