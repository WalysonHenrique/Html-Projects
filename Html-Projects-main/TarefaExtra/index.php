<?php
// Configurações de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "root";
$database = "tarefaExtra";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Consulta para obter os produtos
$sql = "SELECT * FROM produto";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Lista de Produtos</title>
    
</head>
<body>

    <h1>Lista de Produtos</h1>

    <?php
    // Exibir cada produto
    if ($result->num_rows > 0) {
        while ($produto = $result->fetch_assoc()) {
            $produto_id = $produto['id'];
            $produto_nome = 'produto' . $produto_id;

            echo '<div class="produto">';
            echo '<h1>' . $produto['nome'] . '</h1>';

            // Diretório das fotos baseado no nome do produto (ex: img/produto1)
            $diretorio_fotos = './img/' . $produto_nome . '/';

            // Verificar se o diretório existe
            if (is_dir($diretorio_fotos)) {
                // Obtém todas as imagens no diretório do produto
                $fotos = glob($diretorio_fotos . "*.jfif");

                // Exibir fotos do produto
                echo '<div class="galeria">';
                if (count($fotos) > 0) {
                    foreach ($fotos as $foto) {
                        echo '<img src="' . $foto . '" alt="Foto do Produto">';
                    }
                } else {
                    echo '<p>Sem fotos para este produto.</p>';
                }
                echo '</div>';
            } else {
                echo '<p>Diretório de fotos não encontrado.</p>';
            }

            echo '</div>';
        }
    } else {
        echo '<p>Nenhum produto encontrado.</p>';
    }

    // Fechar a conexão
    $conn->close();
    ?>

</body>
</html>