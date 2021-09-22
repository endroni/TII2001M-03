<?php

class Funcionario{
    public $nome = 'Lucas'; 
      protected  $salario = 800.00; 
      private $rg ='31.786.453-9'; 
    
    
    
      public function falar(){
       $mensagem = "Olá ";
   
       echo " $mensagem $this->nome, seu salario é $this->salario!!!";
      }
   
   

}
?>
