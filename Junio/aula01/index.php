<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notebook</title>
</head>
<body>
    <?php
    require_once "notebook.php" ;
    $notebook1 = new notebook ();
    $notebook1 -> marca = "Lenovo";
    $notebook1 -> armazenamento = "1 Terabite";
    $notebook1 -> processador = "Core i5";
    $notebook1 -> preco = "R$ 3419,05";

    echo "<pre>";

    print_r ($notebook1);

    echo "</pre>";
    ?>
</body>
</html>