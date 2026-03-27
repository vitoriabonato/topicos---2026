<html>

<head>
    <title>Excluir Cadastro </title>
    <style>

        body {
        
            background-image: url('gato4.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: georgia;
            margin: 0;
            padding: 20px;
             display: flex;
             flex-direction: column;
               align-items: center;
        }

       

        h2 {
             padding: 15px 30px;
            border-radius: 20px;
            text-decoration: none;
            color: #7624c2;
            border-bottom: 2px solid  #d8b4f8;
            padding-bottom: 5px;
            display: inline-block;
            background: linear-gradient(135deg,#c084fc, #ae92c9);
        
        }

         a {
            position: sticky;
            text-decoration: none;
            text-align: center;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #6a0dad;
            padding: 15px 30px;
            border-radius: 20px;
            display: inline-block;
            background: linear-gradient(135deg,#c084fc, #ae92c9);


        }
        .credito {
     font-size: 14px;
    position: fixed;
    top: 20px;
    right: 20px;
    background: rgba(255, 255, 255, 0.7);
    color: #6a0dad;
    padding: 10px 15px;
    border-radius: 20px;
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 10px rgba(200, 150, 255, 0.3);
}
            
            
           
        

        
    
    </style>
</head>
<body>
    <div class="credito">
    Vitória Bonato 
</div>
<?php

include('conexao.php');

if (isset($_GET['id'])) {  

$id = $_GET['id'];



$sql = "DELETE FROM contatos WHERE id = $id";

if (mysqli_query($conexao,$sql)){
    echo "<h2> Contato excluído com sucesso! </h2>";
    echo "<a href='index.php'> VOLTAR </a>";
    exit;
} else{
    echo "<h2> Erro ao excluir o contato.</h2>" .mysqli_error($conexao);
    echo " <a href= 'index.php' > VOLTAR </a>";
    exit;
}
 }