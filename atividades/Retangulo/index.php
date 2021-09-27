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
    require_once 'retangulo.php';

    $r1 = new Retangulo(4,2);
    $r1->diagonal();
    echo $r1->diagonal();

    ?>    
</body>
</html>