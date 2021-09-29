<?php
class Pessoa{
    public $nome;
    public $sobrenome;
    public $fone;

    public function __construct($n, $s, $f){
        $this->nome = $n;
        $this->sobrenome = $s;
        $this->fone = $f;
    }
}

class Fone{
    public $codigo;
    public $numero;
    public $celular;

    public function __construct($co, $nu, $ce){
        $this->codigo = $co;
        $this->numero = $nu;
        $this->celular = $ce;
    }
}
?>