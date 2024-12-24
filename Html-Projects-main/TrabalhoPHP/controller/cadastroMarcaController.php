<?php
include_once '../model/marcasModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];


    if (isset($_FILES['nomeMarca']) && $_FILES['nomeMarca']['error'] == 0) {
        $diretorio = '../img/logos/';
        
        $nomeImagem = uniqid() . '.svg';

        $caminhoImagem = $diretorio . $nomeImagem;

        if (move_uploaded_file($_FILES['nomeMarca']['tmp_name'], $caminhoImagem)) {
            $marcasmodel = new MarcasModel();

            $result = $marcasmodel->cadastrarMarca($nome,  $nomeImagem);

            if ($result) {
                header('Location: ../index.php');
            } else {
                echo "Erro ao cadastrar carro.";
            }

            $marcasmodel->closeConnection();
        } else {
            echo "Erro ao mover o arquivo da imagem.";
        }
    } else {
        echo "Nenhuma imagem foi enviada.";
    }
} else {
    echo "Método de requisição inválido.";
}
