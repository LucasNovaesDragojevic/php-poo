<?php

require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizacao
{
    private $espectador;
    private $filme;

    function __construct($espectador, $filme)
    {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotalAssistido($this->espectador->getTotalAssistido() + 1);
    }

    function getEspectador()
    {
        return $this->espectador;
    }

    function setEspectador($espectador)
    {
        $this->espectador = $espectador;
    }

    function getFilme()
    {
        return $this->filme;
    }

    function setFilme($filme)
    {
        $this->filme = $filme;
    }

    function avaliar()
    {
        $this->filme->setAvaliacao(5);
    }

    function avaliarNota($nota)
    {
        $this->filme->setAvaliacao($nota);
    }

    function avaliarPorcentagem($porcentagem)
    {
        if ($porcentagem <= 20)
        {
            $novaNota = 3;
        }
        else if ($porcentagem <= 50)
        {
            $novaNota = 5;
        }
        else if ($porcentagem <= 90)
        {
            $novaNota = 8;
        }
        else
        {
            $novaNota = 10;
        }
        $this->filme->setAvaliacao($novaNota);
    }
}