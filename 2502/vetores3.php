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
<h2> Dados de um Produto </h2>
<body> 
    <?php

$produto= ["nome"=> "Bolsa" ,"valor" => 250.00 , "estoque" => 50];

foreach( $produto as $produtos => $preço) {
    echo " $produtos : $preço" ;
}

    ?>
    </body>
    </html>
