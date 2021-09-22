<?php
class jogador{
    public $atleta;
    protected $clube = "Cruzeiro esporte clube.";
    private $declaracao =1;

    public function declarar(){
        $mensagem = "Olá jogador";
        echo "$mensagem $this->atleta, seu clube é: $this->clube";
    }
}
?>