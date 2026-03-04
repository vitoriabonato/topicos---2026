<!DOCTYPE html>
<html>
<head>
    <title> Frutas</title>
    <style>
        body{  
        background-color: pink;
          }
        </style>
</head>
<h2> Lista de Frutas </h2>
<body>
    <?php
$frutas= ["Uva","Banana","Abacaxi","Pera"];

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
$frutas[] = "Maça";

echo "   Fruta Nova:" . $frutas[4];

?>
</body>
</html>