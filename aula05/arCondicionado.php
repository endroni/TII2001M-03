<?php
interface Controle{
    public function ligar();
    public function desligar();
    public function aumentarTemperatura();
    public function diminuirTemperatura();
}

class ArCondicionado implements Controle{
    private $temperatura;
    private $marca;
    private $modelo;
    private $tipo;
    private $status;

    public function __construct($tem, $mar, $mod, $tip){
        $this->temperatura = $tem;
        $this->marca = $mar;
        $this->modelo = $mod;
        $this->tipo = $tip;
        $this->status = true;
    }

    public function getTemperatura(){
        return $this->temperatura;
    }
    public function setTemperatura($temp){
        $this->temperatura = $temp;
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

    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tip){
        $this->tipo = $tip;
    }

    public function getStatus(){
        return $this->status;
    }
    public function setStatus($sta){
        $this->status = $sta;
    }

    public function ligar(){
        if ($this->getStatus()){
            $this->setStatus(false);
            echo 'Estava ligado, agora foi desligado!';
        } else{
            $this->setTemperatura(23);
            echo "Ligar Ar Condicionado! <br> {$this->getTemperatura()} ºC";
        }
    }

    public function desligar(){
        if($this->getStatus()) {
            $this->getStatus(false);
            echo "Desligando";            
        } else {
            $this->Ligar();
        }
    }

    public function aumentarTemperatura(){
        if($this->getStatus()){
            $this->temperatura++;
            echo "Temperatura em {$this->getTemperatura()} <br>";
        }
    }

    public function diminuirTemperatura(){
        if($this->getStatus()){
            $this->temperatura--;
            echo "Temperatura em {$this->getTemperatura()} <br>";
        }
    }
}
?>