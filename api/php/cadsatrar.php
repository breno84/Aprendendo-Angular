<?php

//incluir conexao
include("conexao.php");

//obter dados
$obterDados = file_get_contents("php://input");


//extrair dados JSON

$extrair = json_decode($obterDados);

//separar os dados do JSON
$nomeCurso = $extrair->cursos->nomeCurso;
$valorCurso = $extrair->cursos->valorCurso;

//SQL
$sql = "INSERT INTO cursos (nomeCurso, valorCurso) VALUES ('$nomeCurso',$valorCurso)";
mysqli_query($conexao,$sql);

//Exportar dados cadastrados
$curso = [
    'nomeCurso' => $nomeCurso,
    'valorCurso' => $valorCurso
];

json_encode(['cursos'=>$curso]);

?>