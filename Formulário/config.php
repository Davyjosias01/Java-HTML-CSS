<?php 

    //conexão do banco de dados mysql;
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-davy';

    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($conn->conect_errno){
        echo "Deu erro!";
    } else {
        echo "Deu boa!";
    }
    //conexão do banco de dados mysql, FIM;


?>