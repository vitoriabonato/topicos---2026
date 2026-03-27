<html>

<head>
    <title>Edição de contatos</title>
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

        h1 {
            text-align: center;
            color: #6a0dad;
            padding: 15px 30px;
            border-radius: 20px;
            display: inline-block;
            background: linear-gradient(135deg,#c084fc, #ae92c9);
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

         
        form {
            background-color:  #ffffff;
            padding: 25px;
            border-radius: 15px;
            max-width: 400px;
            box-shadow: 0 0 15px rgba(200, 150, 255, 0.3);
            margin-bottom: 30px;
            margin: 20px auto;
            width: 100%;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #d8b4f8;
            border-radius: 8px;
        }

        input[type="submit"] {
            background-color: #c084fc;
            display:block;
            margin: 16px auto;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
        
        }

        input[type="submit"]:hover {
            background-color: #a855f7;
        }

        table {
            width: 100%;
            max-width: 700px;
            border-collapse: collapse;
            background-color: white;
            border-radius: 15px;
            overflow: hidden;
        }

        th {
            background-color: #c084fc;
            color: white;
            padding: 10px;
        }

        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        tr:hover {
            background-color: #f3e8ff;
        }

        a {
            text-decoration: none;
            position: sticky;
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

 a:hover {
            text-decoration: none;
        }

       

.formulario {
    width: 35%;
}



   .credito {
    position: fixed; 
    top: 20px;
    right: 20px;
    background: rgba(255, 255, 255, 0.7);
    color: #6a0dad;
    padding: 10px 15px;
    border-radius: 20px;
    font-size: 14px;
    backdrop-filter: blur(8px);
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

$id = $_GET['id'];

$sql = "SELECT * FROM contatos WHERE id = $id";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) == 1) {
    $contato = mysqli_fetch_assoc($resultado);
} else {
    echo "Contato não encontrado.";
    exit;
}

if (isset($_POST['atualizar'])) {

    $novo_nome = $_POST['nome'];
    $novo_endereco = $_POST['endereco'];
    $novo_fone = $_POST['fone'];

    $sql2 = "UPDATE contatos SET nome='$novo_nome', endereco='$novo_endereco', 
    telefone='$novo_fone' WHERE id = $id";

    if (mysqli_query($conexao, $sql2)) {
        echo "<h2>Contato foi atualizado com sucesso!</h2>";
        echo "<a href='index.php'>VOLTAR</a>";
        exit;
    } else {
        echo "<h2>Erro ao atulizar contato. " . mysqli_error($conexao);
        echo "<a href='index.php'>VOLTAR</a>";
        exit;
    }
}


?>
<h1>Edição de contatos</h1>
<form method="POST">
    Nome: <input type="text" name="nome" value="<?php echo $contato['nome']; ?>"><br><br>
    Endereço: <input type="text" name="endereco" value="<?php echo $contato['endereco']; ?>"><br><br>
    Telefone: <input type="text" name="fone" value="<?php echo $contato['telefone']; ?>">
    <br><br>

    <input type="submit" name="atualizar" value="Atualizar">
</form>
<div class="credito">
    Vitória Bonato 
</div>