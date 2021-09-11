<?php

class Fatorial {
    private $numero;

    function __construct($num){
        $this->numero = $num;    
    }

    function result(){
        $contador = 1;
        $fatorial = 1;
        while ($contador <= $this->numero) {
            $fatorial = $fatorial * $contador;
            $contador++;
        }
        echo $fatorial;
    }
}

$newfactorial = New Fatorial(8);
echo '<h1>'.$newfactorial->result()."</h1>";