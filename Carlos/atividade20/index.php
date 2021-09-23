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

        $class = new pessoa();
        $class -> nome = "Jovem";
        $class -> Idade = "22 anos";
        $class -> altura = "1.85cm";
        $class -> peso = "87kg";
      
        
        $class->falar();

    
    
        echo "<pre>";
            print_r($pessoa);
        echo "</pre>";

    ?>

</body>
</html>
