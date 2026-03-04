<!DOCTYPE html>
<html>
<head>
    <title> Atividade bônus</title>
    <style>
        body{  
        background-color: pink;
          }
        </style>
</head>
<h2> Bônus - Cadastro </h2>
<body> 
    <?php
 $login= [  ["nome" => "Vitória" , "ano" => 2008.] ,
             ["nome" => "Tania" , "ano" => 1986.],
             ["nome" => "Matias" , "ano" => 1983. ]
        ];

    foreach ( $login as $pessoas) {
         echo " Nome:" . $pessoas["nome"] . " - " ;
         echo " Ano:" . $pessoas["ano"] ;
    }
    ?>
    </body>
    </html>
    
 



