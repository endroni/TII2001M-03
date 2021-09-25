<?php
class Pai {
    protected function Tarefa($tar){
        echo "A função do pai é $tar";
    }
}

class Filho extends Pai{
    public function Tar($tar){
        $this->Tarefa($tar);
    }
}
?>