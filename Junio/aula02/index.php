<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jogador</title>
</head>
<body>
    <h1>O jogador</h1>
    <?php

    require_once 'jogador.php';

    $jogador1 = new Jogador();
    $jogador1->atleta = "Marcelo Moreno";

    $jogador1->declarar();
    ?>
</body>
</html>