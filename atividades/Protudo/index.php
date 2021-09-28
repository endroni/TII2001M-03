<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>
<body>
    <?php
        require_once 'produto.php';

        $p1 = new Produto('Monitor', 495.78, 10);

        echo $p1->removerProdutos(1);
        
        echo "<pre>";
            print_r($p1);
        echo"</pre>";
    ?>
</body>
</html>k