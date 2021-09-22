<?php

class Carro{
    private $marca;
    private $modelo;
    private $ano;
    private $status = true;

    public function __construct($mar, $mod, $ano, $status){
        $this->marca = $mar;
        $this->modelo = $mod;
        $this->ano = $ano;
        $this->status = $status;
        $this->Ligar();
    }

    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($mar){
        $this->marca = $mar;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($mod){
        $this->modelo = $mod;
    }
    public function getAno(){
        return $this->ano;
    }

    public function Ligar(){
        if(!$this->status) {
            echo "Ligar Carro";
        } else {
            echo "Carro já está ligado";
        }
    }
}
?>