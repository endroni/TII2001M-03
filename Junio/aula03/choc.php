<?php

class A {
    protect $id;

    public function _construct ($id)

    {
        $this->id = $id;

        echo "construct {$this->id}<br>";

    }

    public function _destruct()
    {
        echo "destruct {$this->id}<br>";
    }
}

$a = new A(1);

echo "-------------<br>";
$aa = new A(2);

echo "===========<br>";
?>