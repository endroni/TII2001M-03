<?php
class Produto{
    private $nome;
    private $preco;
    private $quantidade;

    public function __construct($n, $p, $q){
        $this->nome = $n;
        $this->preco = $p;
        $this->quantidade = $q;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function setPreco($p){
        $this->preco = $p;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }
    public function setQuantidade($q){
        $this->quantidade = $q;
    }

    public function valorTotalEmEstoque(){
        return $this->getPreco() * $this->getQuantidade();
    }

    public function adicionarProdutos($quantidade){
        $this->setQuantidade($this->getQuantidade() + $quantidade);
    }

    public function removerProdutos($quantidade){
        $this->quantidade -= $quantidade;
    }
    
}
?>