<?php

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>final</title>
    <style>
        body{  
        background-color: pink;
          }
        </style>
</head>
<body>

<h2>final</h2>

<?php

if ($idade < 18) {

    echo "Menor de idade";

} else {

    echo "Nome: $nome <br>";
    echo "Endereço: $endereco <br>";
    echo "Minha idade é: $idade <br>";
    echo "Sexo: $sexo";
}

?>

</body>
</html>