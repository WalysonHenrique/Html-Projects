<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "aulap2";


$tipoCabeloDesc = $_POST["descCabelo"];
$tipoCabeloOnd = $_POST["ondulacao"];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO TipoCabelo (Descricao, Ondulacao)
VALUES ('$tipoCabeloDesc', '$tipoCabeloOnd')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>