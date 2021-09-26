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
    require_once  'atv21.php' ;

    $SB1 = new SistemaBancário ( 345 , 'Poupança' , 'Lucas' , '50','Conta Ativa',02.90 );
    
     
    $SB1 -> Depositar (); 
   

    ?>
</body>
</html>