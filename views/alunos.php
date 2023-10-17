<a href="?pagina=inserir_aluno" class="btn btn-success mt-3">Inserir novo Aluno</a>
<table cellspacing="5" cellpadding="5">
        <tbody><tr>
            <td>Minimum date:</td>
            <td><input type="text" id="min" name="min"></td>
        </tr>
        <tr>
            <td>Maximum date:</td>
            <td><input type="text" id="max" name="max"></td>
        </tr>
    </tbody></table>
<table class="table" id="alunos">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Editar</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        while($linha = mysqli_fetch_array($consulta_alunos)){
            echo'<tr><td>'.$linha['NOME'].'</td>';
            echo'<td>'.$linha['EMAIL'].'</td>';
            echo'<td>'.$linha['DATA_NASCIMENTO'].'</td>';
    ?>
     <td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['ID']; ?>">Editar</a></td>
      <td><a href="deleta_aluno.php?id_aluno=<?php echo $linha['ID']; ?>">Deletar</a></td>
    <?php
        }
    ?>
</tbody>
</table>