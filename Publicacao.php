<?php
    class Publicacao {
        //variáveis de instância
        private $preco;
        protected $titulo;

        //métodos
        function __construct($p, $t) {
            $this->preco = $p;
            $this->titulo = $t;
        }

        public function setPreco($valor) {
            $this->preco = $valor;
        }

        function getPreco(){
            echo $this->preco;
        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        public function getTitulo() {
            return $this->titulo;
        }
    }