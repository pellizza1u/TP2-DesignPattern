<?php

namespace App;

class GPU implements Computer
{
    protected $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    //On suppose que le prix d'un GPU est de 100 euros donc on ajoute cela au prix de l'ordinateur
    public function getPrice(): int
    {
        return $this->computer->getPrice() + 100; 
    }

    public function getDescription(): string
    {
        return $this->computer->getDescription() . " with GPU";
    }
}
