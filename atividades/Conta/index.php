<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta</title>
</head>
<body>
    <?php
        require_once 'conta.php';

        $c1 = new Conta(1, 'cp', 'João', 55, null);
        // $c1->abrirConta();

        $c2 = new ContaPoupanca(2, 'cp', 'Pedro', 500, null);
        $c2->abrirConta();
        //$c2->encerrarConta();
        //$c2->depositar(500);
        
        $c2->tarifaMensal();

        echo "<pre>";
            print_r($c2);
        echo "</pre>";
    ?>
</body>
</html>