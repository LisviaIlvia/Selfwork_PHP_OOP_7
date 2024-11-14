<?php

class Missili
{
    private $quantita;

    public function __construct($quantita = 5)
    {
        $this->quantita = $quantita;
    }

    public function getQuantita()
    {
        return $this->quantita;
    }

    public function setQuantita($nuovaQuantita)
    {
        return  $this->quantita = $nuovaQuantita;
    }

    public function lanciaMissili()
    {
        if ($this->quantita > 0) {
            $missiliLanciati = rand(1,5);
            $this->quantita -= $missiliLanciati;
            return "Lancio $missiliLanciati missili! Missili rimasti: {$this->quantita}";
        } else {
            return "Nessun missile rimasto!";
        }
    }
}
