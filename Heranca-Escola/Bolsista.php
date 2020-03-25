<?php

require_once 'Aluno.php';

class Bolsista extends Aluno
{
    private $bolsa;

    function getBolsa()
    {
        return $this->bolsa;
    }

    function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;
    }
    
    function renovarBolsa()
    {
        echo "<p>Bolsa renovada.</p>";
    }
    
    function pagarMensalidade()
    {
        echo "<p>$this->nome é bolsista! Então paga com desconto!</p>";
    }
}
