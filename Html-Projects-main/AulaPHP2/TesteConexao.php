<?php
    $host = "localhost";
    $user = "root";
    $password = "root";
    $db = "aulap2";



    $conn = new mysqli($host, $user, $password, $d);

    if ($conn->connect_error){
        die("Conexão não foi concluída". $conn->connect_error);
    }
    echo"Conexão realizada com sucesso !";

    echo("<a href=./index.html>Voltar</a>");
?>

