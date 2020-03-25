<?php

require_once 'Pessoa.php';
require_once 'Publicaca.php';

class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    function __construct ($titulo, $autor, $totPaginas, $leitor)
    {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($totPaginas);
        $this->setLeitor($leitor);

        $this->setAberto(false);
        $this->setPagAtual(0);
    }

    function getTitulo()
    {
        return $this->titulo;
    }

    function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    function getAutor()
    {
        return $this->autor;
    }

    function setAutor($autor)
    {
        $this->autor = $autor;
    }
 
    function getTotPaginas()
    {
        return $this->totPaginas;
    }
 
    function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }

    function getPagAtual()
    {
        return $this->pagAtual;
    }

    function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }

    function getAberto()
    {
        return $this->aberto;
    }

    function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }

    function getLeitor()
    {
        return $this->leitor;
    }

    function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }

    function detalhes()
    {
        echo "<hr>Livro: " . $this->getTitulo() . " escrito por " . $this->getAutor();
        echo "<br>Paginas: " . $this->getTotPaginas() . " atual " . $this->getPagAtual();
        echo "<br>Sendo lido por: " . $this->getLeitor()->getNome();
        
        if ($this->getAberto()) 
        {
            echo "<br>O livro está aberto.";
        }
        else
        {
            echo "<br>O livro está fechado.";
        }
        
    }

    function abrir()
    {
        $this->setAberto(true);
    }

    function fechar()
    {
        $this->setAberto(false);
    }

    function folhear($pagina)
    {
        if ($pagina > $this->getTotPaginas()) 
        {
            $this->setPagAtual(0);
        }
        else
        {
            $this->setPagAtual($pagina);    
        }
    }

    function avancarPag()
    {
        if ($this->getPagAtual() >= $this->getTotPaginas()) 
        {
            $this->setPagAtual($this->getTotPaginas());
        }
        else 
        {
            $this->setPagAtual($this->getPagAtual() + 1);
        }
    }

    function voltarPag()
    {
        if ($this->getPagAtual() <= 0) 
        {
            $this->setPagAtual(0);
        }
        else 
        {
            $this->setPagAtual($this->getPagAtual() - 1); 
        }       
    }
}
