<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Atividade 19</h1>
    <?php
    require_once 'socio.php';

    $socio1 = new Socio();
    $socio1->nome = "Bruno";
    //$socio1->cpf = "46549684321";
    //$socio1->telefone = "(31)97151-1486";
    //$socio1->endereco = "Raimundo Francisco Ferreira";

    echo "<pre>";
    print_r($socio1);
    echo "</pre>";
    $socio1->visualizar();
    ?>
</body>
</html>