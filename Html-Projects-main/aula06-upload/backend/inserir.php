<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "site";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>


<?php

$nome = $_POST["nomeReceita"];
$categoria = $_POST["Categoria"];


$sql = "INSERT INTO receita (nomereceita, descricao)
VALUES ('$nome', '$categoria')";



if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;

    $url = "AULA06-UPLOAD/cadastro.php?id=" . urldecode($insert_id);
    header("Location: " . $url);
    
  echo "New record created successfully";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();









?>

