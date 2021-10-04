<?php
class Cadastro {
    public $nome;
    public $data;
    

    public function __construir ($n, $d) {
        $this-> nome = $n;
        $this-> data = $d;
       
    }

    public function getNome () {
        return $this-> nome;
    }
    public function setNome ($n) {
        $this-> nome = $n;
    }

    public function getData () {
        return $this-> data;
    }
    public function setData ($d) {
        $this-> data = $d;
    }

   
    
}


?>