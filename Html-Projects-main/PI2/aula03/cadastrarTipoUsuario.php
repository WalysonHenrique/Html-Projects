<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "loja";

$descricao = $_POST["descricao"];

if ($descricao != null && $descricao != "") {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO tipo_usuario (descricao)
VALUES ('". $descricao ."');";

    if ($conn->query($sql) === TRUE) {
        echo "Tipo usuário cadastrado com sucesso!";
        //Redirecionar 
        header("location:gerenciarTipoUsuario.php");
    } else {
        echo "Ocorreu um erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>