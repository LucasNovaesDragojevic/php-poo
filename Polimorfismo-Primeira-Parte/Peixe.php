<?php

require_once 'Animal.php';

class Peixe extends Animal
{
    private $corEscama;

    function getCorEscama()
    {
        return $this->corEscama;
    }
 
    function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;
    }

    function locomover()
    {
        echo "<p>Nadando</p>";
    }

    function alimentar()
    {
        echo "<p>Comer substâncias</p>";
    }

    function emitirSom()
    {
        echo "<p>Peixe não emite som</p>";
    }
}