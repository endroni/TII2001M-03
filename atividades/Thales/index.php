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

        $creature = new Smaug();
        $creature -> species = "Dragon";
        $creature -> color = "Red";
        $creature -> size = "18m";
        $creature->category="Mythical";

        echo "<pre>";
            print_r($creature);
        echo "</pre>";
    ?>        
</body>
</html>