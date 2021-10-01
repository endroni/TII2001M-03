<?php
class Conta{
    private $numConta;
    protected $tipo;
    private $titular;
    protected $saldo;
    private $status;    

    public function Conta($n, $tip, $tit, $sa){
        $this->numconta = $n;
        $this->tipo = $tip;
        $this->titular = $tit;
        $this->saldo = $sa;
        $this->status = false; 
    }
    
    public function getNumConta(){
        return $this->numConta;
    }
    // Não temos um setNumConta, porque geralmente o número da conta de um cliente nunca muda. 
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }
    public function getTitular(){
        return $this->titular;
    }
    // Não temos um setTitular, porque geralmente é um atributo imutável. 
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($sa){ // essa variável $s está dentro de um scopo local
        $this->saldo = $sa;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($st){ 
        $this->status = $st;
    }

    public function abrirConta($titular){
        if ($this->tipo === 'cp' && $this->saldo > 50){
            $this->setStatus(true);
            echo "<p>Conta Poupança aberta</p>";
        }if($this->tipo === 'cc'){
            if($this->saldo >= 200 || !empty($titular->cttps)){
                $this->setStatus(true);
                echo "<p>Conta Corrente aberta</p>";
            } else {
                echo 'A conta precisa ter um saldo de pelo menos R$ 200,00 ou ter vinculo empregatício';
            }
        } else{
            echo 'Conta não pode ser aberta';
        }
    }

    public function encerrarConta(){
        if($this->saldo == 0) {
            $this->setStatus(false);
            echo 'Conta encerrada';
        } else {
            echo 'O saldo precisa estar zerado!';
        }
    }

    public function depositar($valor){
        if($this->status){
            $this->setSaldo($this->saldo + $valor);
            echo "Novo saldo R$: {$this->getSaldo()}";
        } else {
            echo 'A conta precisa estar aberta para realizar depósitos';
        }
    }

    public function sacar($valor){
        if($this->status){
            if($this->saldo >= $valor){
                $this->setSaldo($this->saldo - $valor);
                echo "Novo saldo R$: {$this->getSaldo()}";
            } else {
                echo 'Saldo insuficiente';
            }
        } else {
            echo 'A conta precisa estar aberta para realizar depósitos';
        }
    }
    public function tarifaMensal(){

    }
}

class ContaCorrente extends Conta{
    public function tarifaMensal(){
        if($this->tipo === 'cc'){
            echo "<p>Saldo anterior R$ {$this->getSaldo()}</p>";
            $this->saldo = $this->saldo - 29.9;
            echo "<p>Novo saldo R$ {$this->getSaldo()}</p>";
        }
    }
}

class ContaPoupanca extends Conta{
    public function tarifaMensal(){
        if($this->tipo === 'cp'){
            echo "<p>Saldo anterior R$ {$this->getSaldo()}</p>";
            $this->saldo = $this->saldo + ($this->saldo * 0.0049);
            echo "<p>Novo saldo R$ {$this->getSaldo()}</p>";
        }
    }
}

class ContaPoupaMaia extends ContaPoupanca{

}

class Titular{
    public $nome;
    public $sobrenome;
    public $cttps;

    public function Titular($n, $s, $t){
        $this->nome = $n;
        $this->sobrenome = $s;
        $this->cttps = $t;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function setSobrenome($s){
        $this->sobrenome = $s;
    }
    public function getCttps(){
        return $this->cttps;
    }
    public function setCttps($ct){
        $this->cttps = $ct;
    }
}

?>