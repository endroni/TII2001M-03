<?php
class clasArCondicionado{
    private $numero;
    private $tipo;
    private $titular;
    private $saudo;
    private $status;

    public function __construct($num, $tip, $til, $saud, $status){
        $this->$numero = $num;
        $this->tipo= $tip;
        $this->titular =$til ;
        $this->saudo = $saud;
        $this->status = true;
    }