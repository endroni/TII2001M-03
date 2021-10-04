<?php
class Time {
    public $nome;
    public $cidade;
    public $serie;
    public $vitorias;
    public $derrotas;
    public $empatas;

    public function __construir ($n, $c, $s,$v,$d,$e) {
        $this-> nome = $n;
        $this-> cidade = $c;
        $this-> serie = $s;
        $this-> vitorias = $v;
        $this-> derrotas = $d;
        $this-> empatas = $e;
    }

    public function getNome () {
        return $this-> nome;
    }
    public function setNome ($n) {
        $this-> nome = $n;
    }

    public function getCidade () {
        return $this-> cidade;
    }
    public function setCidade ($c) {
        $this-> cidade = $c;
    }

    public function getSerie () {
        return $this-> serie;
    }
    public function setserie ($s) {
        $this-> serie = $s;
    }

    public function getVitorias () {
        return $this-> vitorias;
    }
    public function setVitorias ($v) {
        $this-> vitorias = $v;
    }
}

class Partida {
    public $timeDaCasa;
    public $visitantes;
    public $aprovada;

    public function __construct ($ti, $vi, $ap) {
        $this-> timeDaCasa = $ti;
        $this-> visitantes = $vi;
        $this-> aprovada = $ap;
    }

    public function getTimeDaCasa () {
        return $this-> timeDaCasa;
    }
    public function setCTimeDaCasa ($ti) {
        $this-> timeDaCasa = $ti;
    }
    public function getVisitantes () {
        return $this-> visitantes;
    }
    public function setVisitantes ($vi){
        $this-> visitantes = $vi;
    }
    public function getAprovada () {
        return $this-> aprovada;
    }
    
}
?>