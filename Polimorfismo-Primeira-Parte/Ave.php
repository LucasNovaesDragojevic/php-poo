<?php

require_once 'Animal.php';

class Ave extends Animal
{
    private $corPena;

    function getcorPena()
    {
        return $this->corPena;
    }
 
    function setcorPena($corPena)
    {
        $this->corPena = $corPena;
    }

    function locomover()
    {
        echo "<p>Voando</p>";
    }

    function alimentar()
    {
        echo "<p>Comer sementes</p>";
    }

    function emitirSom()
    {
        echo "<p>Cantar</p>";
    }
}