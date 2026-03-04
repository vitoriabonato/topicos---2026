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
    <?php

$media = $_POST['media'];

$nota = (50 - (6 * $media) )/4;


if ($media > 10 || $media < 0) {
    echo "<br><br>Nota inválida:  sua média ficou :$media";
}


elseif ($media <= 10 && $media >= 7)
    echo"<br><br> Aprovado com :$media";
elseif ("$media" < 7 && "$media" >= 1.7 && "$media" >= 0)

    echo "<br><br> Você está em exame e precisa tirar: $nota para ser aprovado";

    else {
        echo "<br><br>Reprovado sem direito a exame  sua media ficou: $media";
    }

?>
</body>
</html>