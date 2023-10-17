<a href="?pagina=inserir_cursos" class="btn btn-success">Inserir novo curso</a>
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
<table class="table table-hover table-striped" id="cursos">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Duração</th>
      <th scope="col">Data nascimento</th>
      <th>Editar</th>
      <th>Deletar</th>
    </tr>
  </thead>
  <tbody>
      <?php 
        while($linha = mysqli_fetch_array($consulta_cursos)){
            echo'<tr><td>'.$linha['NOME'].'</td>';
            echo'<td>'.$linha['DURACAO'].'</td>';
            echo'<td>'.$linha['data_nascimento'].'</td>';
      ?>
      <td><a href="?pagina=inserir_cursos&editar=<?php echo $linha['ID']; ?>">Editar</a></td>
      <td><a href="deleta_curso.php?id_curso=<?php echo $linha['ID']; ?>">Deletar</a></td>
    <?php
        }
    ?>
  </tbody>


</table>