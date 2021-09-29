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
        require_once 'pessoa.php';
        $t[0] = new Fone('31', '98888-4412', true);
        $t[1] = new Fone('31', '97777-3311', false);

        $p[0] = new Pessoa('Rubem', 'Santos', $t[0]);
        $p[1] = new Pessoa('Bruno', 'Santiago', $t[1]);

        echo "<pre>";
            print_r($p[1]);
        echo "</pre>";
    ?>
</body>
</html>