<?php
class ArcReactor
{

    private $energia;

    public function __construct($energia = 100)
    {
        $this->energia = $energia;
    }

    public function getEnergia()
    {
        return $this->energia;
    }

    public function setEnergia($nuovaEnergia)
    {
        return $this->energia = $nuovaEnergia;
    }

    public function usaEnergia($quantita)
    {
        $this->energia -= $quantita;
    }
}
