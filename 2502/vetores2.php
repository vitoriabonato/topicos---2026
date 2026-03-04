<!DOCTYPE html>
<html>
<head>
    <title> Números </title>
    <style>
        body{  
        background-color: pink;
          }
        </style>
</head>
<h2> Lista de Números </h2>
<body> 
    <?php
 $numeros= [22,12,26,1,24];

unset( $numeros[2]);

foreach( $numeros as $numerotirado){
        echo " $numerotirado <br>" ;
 }
    ?>
    </body>
    </html>