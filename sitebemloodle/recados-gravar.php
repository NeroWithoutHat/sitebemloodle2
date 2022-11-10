<?php


$nome = $_POST['txtnome'];
$turma = $_POST['optturma'];
$recado = $_POST['txtrecado'];


$sql = "INSERT INTO recados (nome, turma, recado, ativo) 
        VALUES ('$nome', '$turma', '$recado', 'N')";


$conexao = new PDO('mysql:host=127.0.0.1;dbname=sitebemloodle', 'root', '');
$conexao->exec($sql);

echo "<h3>Recado enviado com sucesso!</h3><br>";
echo "<a href='index.html'>Voltar</a>";

?>