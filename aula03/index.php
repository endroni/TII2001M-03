<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03</title>
</head>
<body>
    <h2>Get, Set - Métodos mágicos</h2>
    
    <?php
    require_once 'carro.php';

    $carro1 = new Carro('Fiat','Uno','2020',false );
    
    echo "<pre>";
        print_r($carro1);
    echo "</pre>";

    ?>

</body>
</html>