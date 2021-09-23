<?php
        
        require_once  'atv20.php' ;
        
        //Criando o objeto $tv
        $rd = new rd(true, 'Verde', 60);
        $rd->setligar();
        $rd->getVolume();
        $rd->setcor();

        echo "<hr />";
        var_dump($rd);
                
        ?>

        