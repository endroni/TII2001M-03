<?php

class SistemaBancário{

    private $NumConta;
    private  $Tipo;
    private  $Titular ;
    private  $Saldo ;
    private  $Status ;
    private  $TarifaMensal ;

    public  function  __construct ( $num , $tip , $tit , $sal , $sta ,$tm ) {
        $this -> NumConta = $num ;
        $this -> Tipo = $tip ;
        $this -> Titular = $tit ;
        $this -> Saldo = $sal ;
        $this -> Status = true;
        $this -> TarifaMensal = $tm ;
    }
    public function  getNumConta () {
        return  $this -> NumConta ;
    }
    public function  setNumConta ( $num ) {
        $this -> NumConta = $num ;
    }

    public  function  getTipo () {
        return  $this -> Tipo ;
    }
    public  function  setTipo ( $tip ) {
        $this -> Tipo = $tip ;
    }

    public  function  getTitular () {
        return  $this -> Titular ;
    }
    public  function  setTitular ( $tit ) {
        $this -> Titular = $tit ;
    }

    public  function  getSaldo () {
        return  $this -> Saldo ;
    }
    public  function  setSaldo ( $sal ) {
        $this -> saldo = $sal ;
    }

    public  function  getStatus () {
        return  $this -> Status ;
    }
    public  function  setStatus ( $sta ) {
        $this -> Status = $sta ;
    }

    public  function  getTarifaMensal () {
        return  $this -> TarifaMensal ;
    }
    public  function  setTarifaMensal ( $tm ) {
        $this -> TarifaMensal = $tm ;
    }

    public  function AbrirConta  () {
        if ( $this -> getStatus ()) {
            $this -> setStatus ( false );
            echo  'Conta aberta, agora foi adicionada uma nova conta!' ;
        } else {
            $this -> setNumConta ( 2 );
            echo  "Abrir conta! <br> {$this-> getNumConta ()}" ;
        }
    }


    public  function  EncerrarConta () {
        if ( $this -> getStatus ()) {
            $this -> getStatus ( false );
            echo  "Conta encerrada" ;            
        } else {
            $this -> AbrirConta ();
        }
    }

    public  function  Depositar () {
        if ( $this -> getStatus ()) {
            $this -> NumConta ++;
            echo  "Valor do depositor em {$this-> getNumConta ()} <br>" ;
        }
    }


    public function Sacar () {
        if ( $this -> getStatus ()) {
            $this -> Saldo --;
            echo  "sacar dinheiro {$this-> getSaldo ()} <br>" ;
        }
    }
    public function TarifaMensal () {
        if ( $this -> getStatus ()) {
            $this -> Saldo --;
            echo  "Tarifa Mensal é {$this-> getTarifaMensal ()} <br>" ;
        }
    }
}
   
 


?>