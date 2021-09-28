<?php
class Produto{
    private $nome;
    private $email;
    private $cidade;
    private $status;

    public function __construct($n, $e, $c){
        $this->nome = $n;
        $this->email = $e;
        $this->cidade = $c;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($e){
        $this->email = $e;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($c){
        $this->quantidade = $c;
    }

    
    
}
?>