<?php

    class Superclasse {
        public function teste()
        {
            echo "Superclasse::teste executado.";
        }

        final public function outroTeste(){
            echo "Superclasse:outroteste executado.";
        }
    }

    class Subclasse extends Superclasse {
        public function outroTeste(){
            echo "Subclasse::outroTeste executado.";
        }
    }

    