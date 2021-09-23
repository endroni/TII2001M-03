<?php
class Rd {
      //Atributos
    private   $ligar;
    private   $cor;
    public    $Volume;
    //Método Construtor
    function __construct($ligar,$cor,$volume) {
        $this->ligar = $ligar;
        $this->cor     = $cor;
        $this->volume  = $volume;
    }
    
    function getVolume(){
        echo "O volume está no {$this->volume} ";
    }
   
    function setCor(){
        echo "  a cor  do radio é {$this->cor}";
    }
   
    function setligar() {
        $this->ligar = true;
    }
    
    function desligar() {
        $this->ligar = false;
    }
    
    function __destruct() {
        echo "<hr/>Obejto Conexão encerrada.";
    }
}