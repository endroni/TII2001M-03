<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chocolate</title>
</head>
<body>
    <h1>Chocolates Deliciosos</h1>

    <?php
    require_once 'chocolate.php';

    $chocolate1 = new Chocolate('Garoto', 'Amargo', 'R$3,40',false);

    echo "<pre>";

    print_r($chocolate1);

    echo "</pre>";
    ?>
</body>
</html>