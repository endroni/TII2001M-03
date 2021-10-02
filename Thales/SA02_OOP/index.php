<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    require_once 'class.php';

    $procedimento = new Procedimento();
    $procedimento->CadastrarProcedimento(10, '21/10/2021', 'Cirurgia Bariátrica', 'R$ 5500','Feminino','Paciente Diabético');

    echo "<pre>";
    print_r($procedimento);
    echo "</pre>";
    ?>
</body>
</html>