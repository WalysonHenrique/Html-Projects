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




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>
        <form action="inserir.php" method="post" >
            <label for="">Insira o nome da receita</label>
            <input type="text" name="nomeReceita" id="nomeReceita">
            <input type="text" name="Categoria" id="Categoria">
            <input type="submit" value="Enviar">
        </form>
    </main>
    <footer></footer>

</body>
</html>