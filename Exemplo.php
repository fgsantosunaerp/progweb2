<?php
    class Exemplo {
        public static $variavel1 = 'foo';

        public function valorStatic()
        {
            return self::$variavel1;
        }
    }

    print Exemplo::$variavel1 . "\n";
    $exemplo = new Exemplo();

    print $exemplo->valorStatic()."\n";

    $novoObjeto = new Exemplo();
    print $novoObjeto->valorStatic()."\n";
