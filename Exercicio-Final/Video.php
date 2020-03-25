<?php

require_once 'AcoesVideo.php';

class Video implements AcoesVideo
{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;
    
    function __construct($titulo)
    {
        $this->setTitulo($titulo);
        $this->avaliacao = 0;
        $this->setViews(0);
        $this->setCurtidas(0);
        $this->setReproduzindo(false);
    }

    function getTitulo()
    {
        return $this->titulo;
    }

    private function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    function getAvaliacao()
    {
        return $this->avaliacao;
    }

    function setAvaliacao($ava)
    {
        $media = ($this->avaliacao + $ava) / $this->views;
        $this->avaliacao = $media;
    }
 
    function getViews()
    {
        return $this->views;
    }

    function setViews($views)
    {
        $this->views = $this->views + $views;
    }

    function getCurtidas()
    {
        return $this->curtidas;
    }

    private function setCurtidas($curtidas)
    {
        $this->curtidas = $curtidas;
    }

    function getReproduzindo()
    {
        return $this->reproduzindo;
    }

    private function setReproduzindo($reproduzindo)
    {
        $this->reproduzindo = $reproduzindo;
    }

    function play()
    {
        $this->setReproduzindo(true);
    }
    
    function pause()
    {
        $this->setReproduzindo(false);
    }

    function like()
    {
        $this->setCurtidas($this->getCurtidas() + 1);
    }
}
