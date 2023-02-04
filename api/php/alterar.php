<?php

//incluir conexao
include("conexao.php");

//obter dados
$obterDados = file_get_contents("php://input");


//extrair dados JSON

$extrair = json_decode($obterDados);

//separar os dados do JSON
$idCurso = $extrair->cursos->idCurso;
$nomeCurso = $extrair->cursos->nomeCurso;
$valorCurso = $extrair->cursos->valorCurso;

//SQL
$sql = "UPDATE cursos SET nomeCurso='$nomeCurso', valorCurso=$valorCurso WHERE idCurso=$idcurso";
mysqli_query($conexao,$sql);

//Exportar dados cadastrados
$curso = [
    'idCurso'=>$idCurso,
    'nomeCurso' => $nomeCurso,
    'valorCurso' => $valorCurso
];

json_encode(['cursos'=>$curso]);

?>