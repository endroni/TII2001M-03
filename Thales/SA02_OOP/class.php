<?php
    class Procedimento
    {
        private $codigo;
        private $data;
        private $nomeProcedimento;
        private $valor;
        private $genero;
        private $excecao;

        /*public function __construct($codigo, $data, $nomeProcedimento, $valor)
        {
            $this->codigo = $codigo;
            $this->data = $data;
            $this->nomeProcedimento = $nomeProcedimento;
            $this->valor = $valor;
        }*/

        public function setCodigo($codigo)
        {
            $this->codigo = $codigo;
        }

        public function getCodigo()
        {
            return $this->codigo;
        }

        public function setData($data)
        {
            $this->data = $data;
        }

        public function getData()
        {
            return $this->data;
        }

        public function setNomeProcedimento($nomeProcedimento)
        {
            $this->nomeProcedimento = $nomeProcedimento;
        }

        public function getNomeProcedimento()
        {
            return $this->nomeProcedimento;
        }

        public function setValor($valor)
        {
            $this->valor = $valor;
        }

        public function getValor()
        {
            return $this->valor;
        }

        public function setGenero($genero)
        {
            $this->genero = $genero;
        }

        public function getGenero()
        {
            return $this->genero;
        }

        public function setExcecao($excecao)
        {
            $this->excecao = $excecao;
        }

        public function getExcecao()
        {
            return $this->excecao;
        }    

        public function CadastrarProcedimento($codigo,$data,$nomeProcedimento,$valor,$genero,$excecao){
            $this->codigo=$codigo;
            $this->data=$data;
            $this->nomeProcedimento=$nomeProcedimento;
            $this->valor=$valor;
            $this->genero=$genero;
            $this->excecao=$excecao;            
        }
    }
?>