<!DOCTYPE html>
<html>
<head>
    <title> Dados de um Produto </title>
    <style>
        body{  
        background-color: pink;
          }
        </style>
</head>
<h2> Média de alunos </h2>
<body> 
    <?php
$alunos= [ [ "nome" => "Laura" , "nota" => 6],
         [ "nome" => "Yasmin" , "nota" => 8],
        [ "nome" => "Ana Júlia" , "nota" => 5] ];

foreach( $alunos as $alunas)  {
    echo $alunas ["nome"] . ":"  . $alunas["nota"];
}
$soma=0;
foreach($alunos as $alunas) {
    $soma += $alunas["nota"];
}
 $media = $soma/count ($alunos);
 echo " <br> Média das Notas :". $media . "<br" ;

 $maiornota=$alunos[0]["nota"];
 $melhoraluno=$alunos[0]["nome"];

 foreach($alunos as $alunas) {
if ($alunas ["nota"]> $maiornota) {
    $maiornota = $alunas["nota"];
    $melhoraluno= $alunas["nome"];
 }
  }
  echo "Maior nota : $maiornota (Aluno: $melhoraluno)"
  ?>
  </body>
  </html>