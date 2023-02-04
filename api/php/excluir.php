<?php

//incluir conexao
include("conexao.php");

//obter dados
$obterDados = file_get_contents("php://input");

//extrair dados JSON

$extrair = json_decode($obterDados);

//separar os dados do JSON
$idCurso = $extrair->cursos->idCurso;

//SQL
$sql = "DELETE FROM cursos WHERE idCurso=$idCurso";
mysqli_query($conexao,$sql);

?>