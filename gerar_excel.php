<?php
include 'db.php';

$sql = "SELECT * FROM curso";
$resultado = mysqli_query($conn, $sql);

$headers = ['Nome', 'Duração', 'Data de inicio', 'Professor', 'Nº de vagas', 'Área', 'Valor', 'Desconto'];

// Nome do arquivo
$filename = 'cursos.csv';

// Abre o arquivo para escrita
$file = fopen($filename, 'w');

// Escreve os cabeçalhos no arquivo
fputcsv($file, $headers, ';');

// Escreve os dados no arquivo
while ($linha = mysqli_fetch_assoc($resultado)) {
    fputcsv($file, $linha, ';');
}

// Fecha o arquivo
fclose($file);

// Define os cabeçalhos para download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Pragma: no-cache');
header('Expires: 0');

// Lê o arquivo e imprime na saída padrão (download)
readfile($filename);

// Fecha a conexão com o banco de dados
mysqli_close($conn);

// Exclui o arquivo CSV depois de enviado (opcional)
unlink($filename);

?>
