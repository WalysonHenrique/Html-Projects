<?php
// Defina as configurações do banco de dados
$servername = "localhost";  // Altere se necessário
$username = "root";         // Altere se necessário
$password = "root";         // Altere se necessário
$dbname = "carros";         // Substitua pelo seu banco de dados

// Estabelecendo a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se houve erro na conexão
if ($conn->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conn->connect_error);
}

// Exibir uma mensagem para garantir que a conexão foi bem-sucedida
echo "Conexão com o banco de dados bem-sucedida!<br>";

// Consulta SQL para buscar as marcas
$sql = "SELECT idMarca, nome FROM marca";
$marcas = $conn->query($sql);

// Verificar se a consulta falhou
if (!$marcas) {
    die("Erro na consulta SQL: " . $conn->error);
}

// Verificar se a consulta retornou resultados
?>

<select class="form-control" id="marca" name="marca">
    <option selected>Escolha uma marca</option>
    <?php
    if ($marcas->num_rows > 0) {
        while ($row = $marcas->fetch_assoc()) {
            // Usando idMarca para o valor da opção
            echo "<option value='" . $row['idMarca'] . "'>" . htmlspecialchars($row['nome']) . "</option>";
        }
    } else {
        echo "<option disabled>Nenhuma marca encontrada</option>";
    }
    ?>
</select>

<?php
// Fechar a conexão
$conn->close();
?>
