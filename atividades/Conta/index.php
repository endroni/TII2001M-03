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
        $t[0] = new Titular('João', 'Paulo', null);
        $t[1] = new Titular('Pedro', 'Lajes', null );

        $c1 = new Conta(1, 'cp', 'João', 55);
        // $c1->abrirConta();

        $c2 = new ContaPoupanca(2, 'cc', $t[0], 200);
        $c2->abrirConta($t[0]);
        //$c2->encerrarConta();
        //$c2->depositar(500);
        
        $c2->tarifaMensal();

        echo "<pre>";
            print_r($c2);
        echo "</pre>";
    ?>
</body>
</html>