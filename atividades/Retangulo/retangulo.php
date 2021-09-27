<?php
class Retangulo{
    // Atributos
    private $largura;
    private $altura;

    //Construtores
    public function __construct($la, $al){
        $this->largura = $la;
        $this->altura = $al;
    }

    // Métodos mágicos
    public function getLargura(){
        return $this->largura;
    }
    public function setLargura($la){
        $this->largura = $la;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($al){
        $this->altura = $al;
    }

    // Métodos próprios da classe
    public function area(){        
        //return $this->largura * $this->altura;
        return $this->getLargura() * $this->getAltura();
    }
    public function perimetro(){
        return 2 * ($this->getLargura() + $this->getAltura());
    }
    public function diagonal(){
        return round(sqrt(pow($this->largura, 2) + pow($this->altura, 2)), 4);
    }    
}
?>