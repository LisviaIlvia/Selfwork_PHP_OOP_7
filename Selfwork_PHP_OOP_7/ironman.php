<?php

require('armatura.php');
require('arcReactor.php');
require('repulsori.php');
require('missili.php');

class Ironman extends Armatura
{

    private $arcReactor;
    private $repulsori;
    private $missili;
    private static $contatore = 0;

    public function __construct(ArcReactor $_arcReactor, Repulsori $_repulsori, Missili $_missili)
    {
        $this->arcReactor = $_arcReactor;
        $this->repulsori = $_repulsori;
        $this->missili = $_missili;
        self::$contatore++;
    }

    static function howManyIronman()
    {

        return self::$contatore;
    }

    public function descrizione()
    {

        return "Ironman con Arc Reactor energia: " . $this->arcReactor->getEnergia();
    }

    public function usaRepulsori()
    {
        return $this->repulsori->usaRepulsori();
    }

    public function lanciaMissili()
    {
        return $this->missili->lanciaMissili();
    }
}


