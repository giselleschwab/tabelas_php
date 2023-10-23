<table class="table table-hover table-striped" id="cursos">
<select class="form-select" aria-label="Default select example" id="tabelaSelect">
  <option value="todos" selected>Mostrar todos</option>
  <option value="cursos">Tabela cursos</option>
  <option value="alunos">Tabela alunos</option>
</select>
<table class="table table-hover table-striped" id="tabelaDados">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Data nascimento</th>
    </tr>
  </thead>
  <tbody id = "tabelaCorpo">
         <?php
         while($linha = mysqli_fetch_array($agenda_alunos)) {
           echo "<tr class='alunos'><td>{$linha['NOME']}</td><td>{$linha['data_nascimento']}</td></tr>";
         }
   
         // Reinicia o ponteiro do resultado
         mysqli_data_seek($agenda_curso, 0);
   
         while($linha = mysqli_fetch_array($agenda_curso)) {
           echo "<tr class='cursos'><td>{$linha['NOME']}</td><td>{$linha['data_nascimento']}</td></tr>";
         }

           // Supondo que você tenha resultados para outras tabelas também
          mysqli_data_seek($outra_tabela1, 0);

          while($linha = mysqli_fetch_array($outra_tabela1)) {
            echo "<tr class='outra_tabela1'><td>{$linha['NOME']}</td><td>{$linha['data_nascimento']}</td></tr>";
          }

          mysqli_data_seek($outra_tabela2, 0);

          while($linha = mysqli_fetch_array($outra_tabela2)) {
            echo "<tr class='outra_tabela2'><td>{$linha['NOME']}</td><td>{$linha['data_nascimento']}</td></tr>";
          }
        ?>
         ?>
  </tbody>


</table>