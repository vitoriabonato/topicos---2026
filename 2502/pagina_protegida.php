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
$usuario= $_POST["usuario"];
$senha= $_POST["senha"];

if ($usuario == "vitoria" && $senha == "228") {
    echo " <br> Bem vindo, $usuario ! Você é um estudante.";

}
elseif ($usuario == "dev" && $senha == "128") {
    echo "<br> Bem vindo, $usuario! Você é um desenvolvedor.";

}
else {
    echo "<br> Usuário ou senha inválidos.";
}
?>
</body>
</html>