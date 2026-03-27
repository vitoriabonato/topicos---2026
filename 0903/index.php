<html>

<head>
    <title>Contatos - Turma 31</title>
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
            
            
            color: #7624c2;
            border-bottom: 2px solid  #d8b4f8;
            padding-bottom: 5px;
        }

         h3 {
            padding: 15px 30px;
            border-radius: 20px;
            display: inline-block;
            background: linear-gradient(135deg,#c084fc, #ae92c9);
            color:  #7624c2 ;
            border-bottom: 2px solid  #d8b4f8;
            padding-bottom: 5px;
            font-size: 20px;
            font-weight: bold;
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

       

 a:hover {
            text-decoration: underline;
        }

        a {
            text-decoration: none  !important;
        }

        .container {
    display: flex;
    gap: 40px;
    align-items: flex-start;
    justify-content: center;
    width: 100%;
}


.formulario {
    width: 35%;
}


.lista {
    width: 60%;
    margin-top: 300px;
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
.btn-editar {
    background-color: #a78bfa;
 color: white;
    padding: 6px 12px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 13px;
}

.btn-excluir {

    background-color: #a78bfa;
    color: white;
    padding: 6px 12px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 13px;
    margin-left: 5px;
}



    
    </style>
</head>

<body>
    <h1>Agenda - Turma 31</h1>
    <div class="container">
        <div class="formulario">
                
    <form action="salvar.php" method="POST">
        <h2> Cadastro de contatos </h2>
        Nome: <input type="text" name="nome"  required>  <br><br>
        Endereço: <input type="text" name="endereco" required><br><br>
        Telefone: <input type="text" name="fone" required> <br><br>
        <input type="submit" value="Cadastrar">
    </form>
</div>
<div class="credito">
    Vitória Bonato 
</div>
    <div class="lista">
    <h3> Lista de contatos </h3>

    <?php
    include('conexao.php');
    $sql = "SELECT * FROM contatos";

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        echo "<table border=1> <tr><th>Nome</th>
            <th>Endereço</th> <th>Telefone</th><th>Ação</tr>";
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<tr><td>" . $linha['nome'] . "</td><td>" .
                $linha['endereco'] . "</td><td>" . $linha['telefone'] . "</td>
                <td> 
                <a class='btn-editar' href='editar.php?id=" . $linha['id'] . "'>Editar</a> 
                ou
                <a class='btn-excluir' href='excluir.php?id=" . $linha['id'] . "'onclick=\"return confirm('Deseja realmente excluir este contato?')\">Excluir</a></td></tr>";
        }
        echo "</table>";
    } else {
        echo "<h3>Nenhum contato encontrado!</h3>";
    }


    ?>
</div>
</div>
</body>

</html>