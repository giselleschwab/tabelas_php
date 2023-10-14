<a href="?pagina=inserir_cursos">Inserir novo curso</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Duração</th>
      <th>Editar</th>
      <th>Deletar</th>
    </tr>
    <?php 
        while($linha = mysqli_fetch_array($consulta_cursos)){
            echo'<tr><td>'.$linha['NOME'].'</td>';
            echo'<td>'.$linha['DURACAO'].'</td>';
    ?>
      <td><a href="?pagina=inserir_cursos&editar=<?php echo $linha['ID']; ?>">Editar</a></td>
      <td><a href="deleta_curso.php?id_curso=<?php echo $linha['ID']; ?>">Deletar</a></td>
    <?php
        }
    ?>
  </thead>
</table>