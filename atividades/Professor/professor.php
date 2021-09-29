<?php
class Professor{
    private $nome;
    private $sobrenome;
    public $telefone;
    public $oculos;

    public function __construct($n, $s, $t, $o){
        $this->nome = $n;
        $this->sobrenome = $s;
        $this->telefone = $t;
        $this->oculos = $o;
    }

    public function getNome(){
        return $this->nome;
    }
    // public function setNome($n){
    //     $this->nome = $n;
    // }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    // public function setSobrenome($s){
    //     $this->sobrenome = $s;
    // }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($t){
        $this->telefone = $t;
    }
    public function getOculos(){
        return $this->oculos;
    }
    // public function setOculos($o){        
    //     if (is_bool($o)){
    //         $this->oculos = $o;
    //     } else {
    //         echo 'Valor inválido!';
    //     }
    // }
    public function setOculos($o){        
        if($o === true || $o === false){
            $this->oculos = $o;
        } else {
            echo 'Valor inválido!';
        }
    }
}
?>