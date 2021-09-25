<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Atividade 22</h2>
    <?php
        require_once 'classConta.php';

        echo "<div class='col-4'>";
                $cliente1 = new contaCorrente();
                $cliente1->abrirConta('Thales Silva', 'Corrente', true, false, 900, 300,false);

                echo "<pre>";
                print_r($cliente1);
                echo "</pre>";
        echo "</div>";

        echo "<div class='col-4'>";
           echo $cliente1->encerrarConta(false);
        echo "</div>";

        echo "<div class='col-4'>";
                echo $cliente1->depositar(500);
        echo "</div>";
       
        echo "<div class='col-4'>";
                echo $cliente1->sacar(200);
        echo "</div>";     
        
        echo "<div class='col-4'>";
                echo $cliente1->tarifaMensal(29.90);
        echo "</div>";
        
        echo"<hr>";
        echo"<hr>";
        echo"<hr>";
        echo"<hr>";
        echo"<hr>";
        echo"<hr>";
        echo"<hr>";
        echo"<hr>";

        echo "<div class='col-4'>";
                $cliente2 = new contaPoupanca();
                $cliente2->abrirConta('Janice', 'Poupança', true, false, 013, 300,true);

                echo "<pre>";
                print_r($cliente2);
                echo "</pre>";
        echo "</div>";

        echo "<div class='col-4'>";
                echo $cliente2->depositar(500);

        echo "</div>";

        echo "<div class='col-4'>";
            echo $cliente2->sacar(100);
        echo "</div>";             
    ?>
</body>
</html>