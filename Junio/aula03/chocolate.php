<?php
class Chocolate{
    private $marca;
    private $sabor;
    private $preco;
    private $gramas = false;

    public function _construct($ma, $sa, $preco, $gramas){

        $this->marca = $ma;
        $this->sabor = $sa;
        $this->preco = $preco;
        $this->gramas = $status;
        $this->codigo();

    }

    public function getmarca(){
        return $this->marca;
    }

    public function setmarca($ma){
        $this ->marca = $ma;
    }

    public function getsabor (){
        return this->sabor;
    }

    public function setsabor ($sa){
         $this->sabor = $sa;
    }

    

    public function getpreco($preco){
        return this->preco;
    }

    public function codigo(){
        if (!$this->gramas) {
            echo "Muito caro";
        } else {
            echo "Muito barato";
        }
    }
}
?>