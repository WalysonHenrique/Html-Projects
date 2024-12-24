<?php
include_once '../model/carrosModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $ano = $_POST['ano'];
    $marca = $_POST['idMarca'];


    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $diretorio = '../img/carros/';
        
        $nomeImagem = uniqid() . '.jpg';

        $caminhoImagem = $diretorio . $nomeImagem;

        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoImagem)) {
            $carrosmodel = new CarrosModel();

            $result = $carrosmodel->cadastrarCarro($descricao,$preco,  $nomeImagem, $marca, $ano);

            if ($result) {
                header('Location: ../index.php');
            } else {
                echo "Erro ao cadastrar carro.";
            }

            $carrosmodel->closeConnection();
        } else {
            echo "Erro ao mover o arquivo da imagem.";
        }
    } else {
        echo "Nenhuma imagem foi enviada.";
    }
} else {
    echo "Método de requisição inválido.";
}
