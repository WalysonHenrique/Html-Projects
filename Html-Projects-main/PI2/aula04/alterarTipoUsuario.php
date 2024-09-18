<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "loja";

$descricao = $_POST["descricao"];
$idTipo = $_POST["id"];

if ($descricao != null && $descricao != "") {
    if ($idTipo != null && $idTipo != "") {
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE tipo_usuario SET descricao='" . $descricao . "' WHERE idTipo_usuario='".$idTipo."';";

        if ($conn->query($sql) === TRUE) {
            header("location:gerenciarTipoUsuario.php");
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    }
}

?>