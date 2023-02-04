<?php

//incluir
include ("conexao.php");

//SQL
$sql = "SELECT * FROM cursos";

//executar
$executar = mysqli_query($conexao, $sql);

//vetor
$cursos = [];

//indice
$indice = 0;

//laco
while($linha = mysqli_fetch_assoc($executar)){
    $cursos[$indice]['idCurso']= $linha['idCurso'];
    $cursos[$indice]['nomeCurso']= $linha['nomeCurso'];
    $cursos[$indice]['valorCurso']= $linha['valorCurso'];
}

//JSON
json_encode(['cursos'=>$cursos]);

var_dump($cursos);

?>