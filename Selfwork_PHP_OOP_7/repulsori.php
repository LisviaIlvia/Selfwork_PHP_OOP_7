<?php

class Repulsori
{
    private $potenza;

    public function __construct($potenza = 50)
    {
        $this->potenza = $potenza;
    }

    public function getPotenza()
    {
        return $this->potenza;
    }

    public function setPotenza($nuovaPotenza)
    {
        $this->potenza = $nuovaPotenza;
    }

    public function usaRepulsori()
    {
        return "Usa repulsori con potenza di {$this->potenza}";
    }
}
