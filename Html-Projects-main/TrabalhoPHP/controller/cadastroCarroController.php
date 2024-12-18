<?php
include_once '../model/carrosModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];


    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $diretorio = '../img/';
        
        $nomeImagem = uniqid() . '.jpg';

        $caminhoImagem = $diretorio . $nomeImagem;

        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoImagem)) {
            $filmesModel = new CarrosModel();

            $result = $filmesModel->cadastrarCarro($descricao,$preco,  $nomeImagem);

            if ($result) {
                header('Location: ../index.php');
            } else {
                echo "Erro ao cadastrar carro.";
            }

            $filmesModel->closeConnection();
        } else {
            echo "Erro ao mover o arquivo da imagem.";
        }
    } else {
        echo "Nenhuma imagem foi enviada.";
    }
} else {
    echo "Método de requisição inválido.";
}
