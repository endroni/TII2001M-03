<?php

class Pessoa{
    public $nome;
    protected $telefone = "(31)98888-4414";
    private $fala = 1;

    public function falar(){
        $mensagem = "Olá ";
        echo "$mensagem $this->nome, seu telefone é $this->telefone";
    }

}

?>