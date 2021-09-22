
<?php
class pessoa{
    public $nome;
    protected $cpf="86900800661";
    public $idade;
    public $peso;
    
    public function msg(){
       
        echo "Bem-vindo $this->nome ! Seu cpf é $this->cpf?";
    }
}

?>"