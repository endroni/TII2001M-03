<?php

class pessoa{
    private $nome;
    private $idade;
    private $altura;
    private $peso;
 
    private $status = true;

    public function __construct($nome, $idade, $altura, $peso, $status){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->status = $status;
       
        $this->falar();
    }
    // nome
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->marca = $nome;
    }
    // idade
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    // altura
    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($altura){
        $this->altura = $altura;
    }
    // peso
    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function __destruct(){
        
        echo "Conexão encerrada!";
        
    }
 

    public function falar(){
        if($this->status) {
            echo "Falar dados: ";
        } else {
            echo "Escutar perguntas!";
        }
    }
}
?>