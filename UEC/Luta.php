<?php

require_once "Lutador.php";

class Luta 
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta($primeiroLutador, $segundoLutador)
    {
        if ($primeiroLutador != $segundoLutador && $primeiroLutador->getCategoria() === $segundoLutador->getCategoria())
        {
            $this->setAprovada(true);
            $this->setDesafiado($primeiroLutador);
            $this->setDesafiante($segundoLutador);
        }
        else
        {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }

    public function lutar()
    {
        if ($this->getAprovada()) 
        {
            $this->desafiante->apresentar();
            $this->desafiado->apresentar();

            $vencedor = rand(0,2); // Sorteia vencedor

            switch ($vencedor) {
                case 0: // Empate
                    echo "<p>Empatou</p>";
                    $this->desafiante->empatarLuta();
                    $this->desafiado->empatarLuta();
                    break;
                
                case 1: // Desafiado ganha luta
                    echo "<p>O vencedor foi " . $this->desafiado->getNome();
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                
                case 2: // Desafiante ganha luta
                    echo "<p>O vencedor foi " . $this->desafiante->getNome();
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        } 
        else 
        {
            echo "Luta não pode acontecer.";
        }
        
    }

    public function getDesafiado()
    {
        return $this->desafiado;
    }

    public function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;
    }

    public function getDesafiante()
    {
        return $this->desafiante;
    }

    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;
    }

    public function getRounds()
    {
        return $this->rounds;
    }

    public function setRounds($rounds)
    {
        $this->rounds = $rounds;
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }

    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;
    }
}