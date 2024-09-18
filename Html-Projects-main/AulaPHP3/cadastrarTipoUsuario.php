<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "loja";

$descricao = $_POST ["descricao"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Conexão falhou :( " . $conn->connect_error);
}
echo "Conexão bem sucedida !";


$sql = "insert into tipoUsuario (descricao) values ('". $descricao ."');" ;

if($conn ->query($sql) === TRUE) {
    echo "Tipo de user cadasctrado com sucesso :)";
}
else {
    echo "Falha ao cadastrar tipo :(";
}




?>