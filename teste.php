<?php
    include('Livro.php');
    $matematica = new Livro(111, 'Matemática para Todos');

    $matematica->setEditor('Editora do Fabiano');
    $matematica->setTitulo("Matemática é chato");
    echo $matematica->getTitulo();
    echo "\n";
    echo $matematica->getPreco();
    echo "\n";
    echo $matematica->getEditor();


