<?php
// Definir as configurações do banco de dados
$servername = "localhost"; 
$username = "root"; 
$password = "root"; 
$dbname = "carros";  

// Estabelecendo a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se houve erro na conexão
if ($conn->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conn->connect_error);
}

// Obter o ID do veículo via GET
$idCarro = isset($_GET['id']) ? $_GET['id'] : 0;

if ($idCarro > 0) {
    // Consulta para obter os detalhes do veículo
    $sql = "SELECT carro.*, marca.nome AS nomeMarca, marca.nomeImagem
            FROM carro
            JOIN marca ON carro.idMarcaCarro = marca.idMarca
            WHERE carro.id = $idCarro";
    
    $result = $conn->query($sql);

    // Verificar se o veículo existe
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Veículo não encontrado.";
        exit;
    }
} else {
    echo "ID inválido.";
    exit;
}

// Fechar a conexão
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Veículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header>
    <div class="spacenav">
        <h6>CONTE COM QUEM MAIS AMA E ENTENDE DE CARROS</h6>
    </div>
    <span></span>
    <section class="menu">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="navbar-brand" href="index.php">
                                <img src="./img/logoGrupoSinal.avif" alt="logo sinal">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Zero Km</a>
                        </li>
                        <span></span>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Seminovos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tabela FIPE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Serviços e Peças</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Financiamento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Vendas Diretas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Lojas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="./img/search_24dp_5F6368_FILL0_wght400_GRAD0_opsz24.svg" alt="lupa"> Buscar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="./img/person_24dp_5F6368_FILL0_wght400_GRAD0_opsz24.svg" alt="Conta"> Entrar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="./img/favorite_24dp_5F6368_FILL0_wght400_GRAD0_opsz24.svg" alt="Favoritos"> Favoritos
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
</header>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="img/carros/<?php echo htmlspecialchars($row['imagem']); ?>" alt="Imagem do Carro" class="">
        </div>
        <div class="col-md-6">
            <h1 class="mb-4"><?php echo htmlspecialchars($row['descricao']); ?></h1>
            <p><strong>Ano:</strong> <?php echo htmlspecialchars($row['ano']); ?></p>
            <p><strong>Categoria:</strong> <?php echo htmlspecialchars($row['categoria']); ?></p>
            <p><strong>Marca:</strong> <?php echo htmlspecialchars($row['nomeMarca']); ?></p>
            <div>
                <img src="img/logos/<?php echo htmlspecialchars($row['nomeImagem']); ?>" alt="Logo Marca" class="img-fluid" style="width: 100px; height: auto;">
            </div>
            <p><strong>Preço:</strong> R$ <?php echo number_format($row['preco'], 2, ',', '.'); ?></p>
            <p><strong>Descrição:</strong> <?php echo nl2br(htmlspecialchars($row['descricaoDetalhada'])); ?></p>
        </div>
    </div>

    <div class="mt-4">
        <h4>Formulário de Contato</h4>
        <form action="enviar_email.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" required>
            </div>
            <div class="form-group">
                <label for="mensagem">Mensagem:</label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
        </form>
    </div>

    <div class="mt-4">
        <a href="index.php" class="btn btn-secondary">Voltar</a>
    </div>
</div>

</body>
</html>
