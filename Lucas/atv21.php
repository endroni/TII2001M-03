<?php

class professor{

    private  $Nome ;
    private  $Sobrenome;
    private  $Telefone ;
    public  $Oculos ;
   

    public  function  __construct ( $nom , $sob , $tel , $ocu  ) {      
        $this -> Nome = $nom ;
        $this -> Sobrenome = $sob ;
        $this -> Telefone = $tel ;
        $this -> Oculos = $ocu ;
     
    }
    public function  getNome () {
        return  $this -> Nome ;
    }
    public function  setNome ( $nom ) {
        $this -> Nome = $nom ;
    }

    public  function  getSobrenome () {
        return  $this -> Sobrenome ;
    }
    public  function  setSobrenome ( $sob ) {
        $this -> Sobrenome = $sob ;
    }

    public  function  getTelefone () {
        return  $this -> Telefone ;
    }
    public  function  setTelefone ( $tel ) {
        $this -> Telefone = $tel ;
    }

    public  function  getOculos () {
        return  $this -> Oculos ;
    }
    public  function  setOculos ( $ocu ) {
        $this -> Oculos = $ocu ;
    }

    public  function  getStatus () {
        return  $this -> Status ;
    }
    public  function  setStatus ( $sta ) {
        $this -> Status = $sta ;
    
    }
    public function Nome () {
        if ( $this -> getNome ()) {
            $this -> Nome ;
            echo  "Nome {$this-> getNome ()} <br>" ;
        }
    }  
    
    public function Sobrenome () {
        if ( $this -> getSobrenome ()) {
            $this -> Sobrenome ;
            echo  "Sobrenome {$this-> getSobrenome ()} <br>" ;
        }
    }  

    public function Telefone () {
        if ( $this -> getTelefone ()) {
            $this -> Nome ;
            echo  "Telefone {$this-> getTelefone ()} <br>" ;
        }
    }  
    
    
    
    public  function Oculos  () {
        if ( $this -> getOculos ()) {
            $this -> setOculos ($Oculos = false );
            echo  'Você digitou false, Oculos alterado!' ;
        } else {
            $this -> setOculos ($Oculos = true );
            echo  "Você digitou true, Oculos alterado! <br> {$this-> getOculos ()}" ;
        }
    }
       
    
}



?>