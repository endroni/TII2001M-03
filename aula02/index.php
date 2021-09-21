<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Visibilidade</h2>
    <?php
    require_once 'pessoa.php';

    //Criar o objeto com instancia
    $pessoa1 = new Pessoa();
    $pessoa1->nome = "Rubem";
    // $pessoa1->telefone = "(31)98888-3312";
    // $pessoa1->fala = true;


    $pessoa1->falar();
    ?>
</body>
</html>