<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 19</title>
</head>
<body>
    
<?php
        require_once 'class.php';

        $class = new pessoa();
        $class -> nome = "Jovem";
        $class -> Idade = "22 anos";
        $class -> peso = "87kg";
        
        $class->msg();
        
    ?>  
</body>
</html>
