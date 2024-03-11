<?php

namespace App;

class OLEDScreen implements Computer
{
    protected $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    //on suppose que le prix d'un écran OLED est de 200 euros donc on ajoute cela au prix de l'ordinateur
    public function getPrice(): int
    {
        return $this->computer->getPrice() + 200; 
    }

    public function getDescription(): string
    {
        return $this->computer->getDescription() . " with OLED Screen";
    }
}
