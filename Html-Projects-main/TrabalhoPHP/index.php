<?php
include_once("../TrabalhoPHP/model/carrosModel.php");
$db = new CarrosModel();
$carros = $db->getCarros();
$db->closeConnection();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet">

</head>

<body>

    <header>
        <div class="spacenav">
            <h6>CONTE COM QUEM MAIS AMA E ENTENDE DE CARROS
            </h6>
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
                                <a class="nav-link active" aria-current="page" href="#">Zero Km</a>
                            </li>
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

                            <button type="button" class="btn btn-primary me-3 btnCadastrar" data-bs-toggle="modal"
                                data-bs-target="#modalCadastro">
                                Cadastrar novo carro
                            </button>
                        </ul>
                    </div>
                </div>
            </nav>

        </section>
    </header>

    <main>
        <div class="blococarousel">
            <div class="carrosel">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 10"></button>




                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img\4f94fa21-dda8-4762-b768-08b6b48b0c0d-banner-novo-208-desktop.avif" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img\8eead4c7-8eba-4e0c-8388-8750c8bb3621-deskbasalt.avif" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img\62f9c25c-f126-4b46-be6b-04c7ef8c66f5-banner-pcd-peugeot.avif" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img\245d4721-46c1-4980-ba06-5ec288230cd2-cretabanner.avif" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img\3516bdd6-3521-41e9-8ae3-a82dfa9f7a45-pasalide-1.avif" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img\174059a6-017f-4781-8106-ff1384f11e2d-banner-f-150.avif" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img\bc70b3a3-324a-494f-952e-1290be2a1a95-3.avif" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img\c0c435f0-0cbd-4d38-8136-9c2a48d8641e-rampage.avif" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img\c041b679-ade0-4c73-8934-e9a0b0956041-ranger-xls.avif" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img\e37e46e3-393f-44f2-a130-0c991870030f-202410_kia_carnival_banner.avif" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>


        <div class="blocomarcas">
            <div class="titulo">
                <h4>NAVEGUE POR NOSSAS MARCAS</h4>
            </div>

            <div class="logos">
                <a href="./fiat.php">
                    <img src="./img/logofiat.svg" alt="logo da fiat" width="100" height="100">
                </a>
            </div>


        </div>
        <div class="blocoTitulo">
            <h5 class="tituloFiltros">ENCONTRE SEU VEÍCULO</h5>
        </div>
        <div class="blocoFiltros">

            <div class="filtros">

                <form action="/submit" method="GET" class="formulario">
                    <div class="form-group col-md-3">
                        <select id="inputState" class="form-control">
                            <option selected>MARCA</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <select id="inputState" class="form-control">
                            <option selected>MODELO</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <select id="inputState" class="form-control">
                            <option selected>VERSÃO</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="btnSubmit">
                        <button type="submit" class="btn btn-primary" >
                            VER VEÍCULOS
                            <img src="./img/arrow_forward_24dp_FFFFFF_FILL0_wght400_GRAD0_opsz24.svg" alt="Seta">
                        </button>
                    </div>
                </form>
            </div>



        </div>
        <br>

        <section id="exibir-carros">
        <?php
            if ($carros->num_rows > 0) {
                while ($row = $carros->fetch_assoc()) {
                    echo "<div class='card'>
                    <img src='./img/" . $row["imagem"] . "' class='card-img-top' alt='" . $row["descricao"] . "'>
                    <div class='card-body'>
                        <h5 class='card-title'>" . $row["descricao"] . "</h5>
                        
                        <button type='button' class='btn btn-primary me-3' 
                            data-bs-toggle='modal' 
                            data-bs-target='#modalAtualizacao' 
                            data-ID='" . $row['id'] . "; ?>' 
                            data-descricao='" . $row['descricao'] . "' 
                            Editar
                        </button>

                        <a href='controller/excluirCarroController.php?id=" . $row["id"] . "' class='btn btn-danger' onclick='return confirm(\"Tem certeza que deseja excluir este item?\");'>Excluir</a>
                    </div>
                </div>";
                }
            } else {
                echo "<p>Nenhum Carro encontrado</p>";
            }
            ?>
            <div class="modal fade" id="modalAtualizacao" tabindex="-1" aria-labelledby="modalAtualizacaoLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modalCadastroLabel">Cadastrar novo ator</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="./controller/atualizarAtorController.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" id="ator_id" name="ator_id">

                                <div class="mb-3">
                                    <label for="nome" class="col-form-label" style="color: black">Nome:</label>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="">
                                </div>
                                <input type="submit" value="Atualizar Ator">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>






        <section>
            <div class="modal fade" id="modalAtualizacao" tabindex="-1" aria-labelledby="modalAtualizacaoLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modalCadastroLabel">Atualizar carro</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="controller/atualizarFilmeController.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" id="id" name="id">

                                <div class="mb-3">
                                    <label for="descricao" class="col-form-label"
                                        style="color: black">Descricao:</label>
                                    <textarea class="form-control" id="descricao" name="descricao"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="preco" class="col-form-label" style="color: black">Preço:</label>
                                    <input type="text" class="form-control" id="preco" name="preco">
                                </div>
                                <div class="mb-3">
                                    <label for="imagem">Imagem do Carro:</label>
                                    <input type="file" id="imagem" name="imagem" accept="image/*">
                                </div>
                                <input type="submit" value="Atualizar Carro">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="modal fade" id="modalCadastro" tabindex="-1" aria-labelledby="modalCadastroLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modalCadastroLabel">Cadastrar novo carro</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="controller/cadastroCarroController.php" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="descricao" class="col-form-label"
                                        style="color: black">Descricao:</label>
                                    <textarea class="form-control" id="descricao" name="descricao"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="preco" class="col-form-label" style="color: black">Preço:</label>
                                    <input type="text" class="form-control" id="preco" name="preco">
                                </div>
                                <div class="mb-3">
                                    <label for="imagem">Imagem do Carro:</label>
                                    <input type="file" id="imagem" name="imagem" accept="image/*" required>
                                </div>
                                <input type="submit" value="Cadastrar Carro">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

    <footer></footer>

</body>

</html>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    const modalAtualizacao = document.getElementById('modalAtualizacao');
    modalAtualizacao.addEventListener('show.bs.modal', event => {
        const button = event.relatedTarget;

        const id = button.getAttribute('data-id');
        const descricao = button.getAttribute('data-descricao');
        const precoLocacao = button.getAttribute('data-preco');

        modalAtualizacao.querySelector('#id').value = id;
        modalAtualizacao.querySelector('#descricao').value = descricao;
        modalAtualizacao.querySelector('#preco').value = preco;
    });
</script>