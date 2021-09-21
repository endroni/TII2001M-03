<?php

    class Sofa{
        public $price = 1799.50;
        public $color = "marrom";
        public $seater = 3;

        public function data(){
            echo "Sofá $this->color de $this->seater lugares a partir de R$ $this->price só na Casa Da Loucura";
        }
    }
?>