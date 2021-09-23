<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 20</title>
</head>
<body>
  
    
    <?php
        require_once 'class.php';

        $class = new pessoa("Pedro","40 anos", "185cm", "87kg", true);
   
        echo "<pre>";
            print_r($class);
        echo "</pre>";

    ?>

</body>
</html>
