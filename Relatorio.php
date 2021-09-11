<?php

    //Orientação a objetos - Implementação de Interfaces

    class Relatorio implements Mail {
        public function sendMail()
        {
            echo "Enviando email ...";
        }
    }