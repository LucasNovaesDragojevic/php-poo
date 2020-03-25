<?php

require_once 'Pessoa.php';

class Gafanhoto extends Pessoa
{
    private $login;
    private $totalAssistido;

    function __construct($nome, $idade, $sexo, $login)
    {
        parent::__construct($nome, $idade, $sexo);
        $this->setLogin($login);
        $this->setTotalAssistido(0);
    }

    function getLogin()
    {
        return $this->login;
    }

    private function setLogin($login)
    {
        $this->login = $login;
    }
 
    function getTotalAssistido()
    {
        return $this->totalAssistido;
    }

    function setTotalAssistido($totalAssistido)
    {
        $this->totalAssistido = $totalAssistido;
    }

    function viuMaisUm()
    {
        $this->setTotalAssistido($this->getTotalAssistido() + 1);
    }
}
