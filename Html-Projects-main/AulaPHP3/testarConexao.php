<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Conexão falhou :( " . $conn->connect_error);
}
echo "Conexão bem sucedida !";
?>