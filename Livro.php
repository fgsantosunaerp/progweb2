<?php
include ('Publicacao.php');

class Livro extends Publicacao {
    var $editor;

    function setEditor($nome){
        $this->editor = $nome;
    }

    function getEditor(){
        return $this->editor;
    }

    function getTitulo(){
        return "<h1>".$this->titulo."</h1>";
    }
}