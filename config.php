<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $bdPassword = '';
    $dbName = 'avexado';

    $conexao = new mysqli($dbHost,$dbUsername,$bdPassword,$dbName);

     if($conexao->connect_errno){
         echo "Erro";
     } else {
           echo "Conexao efetuada com sucesso!";
     }
?>