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
        require_once  'atv23.php' ;
        $t1 = new  Time ( 'atletico' , 'BH' , 'A','100','3','2' );
        $t2 = new  Time ( 'cruzero' , 'BH' , 'A','80','3','1' );

        $p1 = new Partida ( 'Atletico' , '30' ,'sim', $t1);
        $p2 = new  Partida ( 'Cruzeiro' , '30','sim', $t2);

        echo  "<pre>" ;
            print_r ( $p1);
        echo  "</pre>" ;
        echo  "<pre>" ;
            print_r ( $p2);
        echo  "</pre>" ;
?>        
</body>
</html>

<?php
$input = array("Atletico", "Cruzeiro");
$rand_keys = array_rand($input, 1);
echo"Quem ganhou o jogo foi o ". $input[$rand_keys];
?>