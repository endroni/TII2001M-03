<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require_once  'class.php' ;

    $livro1 = new  livro ();
    $livro1 -> autor = "Zibia Gasparetto" ;
    $livro1 -> nome = "o amanha a deus pertence" ;
    $livro1 -> genero = "Romance Paranormal" ;
    $livro1 -> sinopse = "um jovem que apaixonado por sua esposa Aline,
     e por causa dessa paixão doentia, acaba se envolvendo num acidente fatal. 
     Inconformado com a morte do corpo físico, Marcelo tenta de todas as formas ficar ao lado da mulher amada." ;

    echo  "<pre>" ;

        print_r ( $livro1 );

    echo  "</pre>" ;
    ?>
</body>
</html>