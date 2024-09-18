<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $h1 = "<h1>Relô o olho!</h1>";
    #$h1 = 2;
    echo $h1;
    ?>

    <h2>Cadastro de teste</h2>

    <form action="cadastrarTeste.php" method="post">
        <p>
            <input type="text" name="descricao" 
            placeholder="Descrição do teste...">
        </p>

        <p>
            <input type="submit" value="Cadastrar">
        </p>

    </form>

</body>

</html>