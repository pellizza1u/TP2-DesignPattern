<?php

namespace App;

use SplObserver;
use SplSubject;

class MusicBand implements SplSubject
{
    private array $observers = [];
    private array $concert = [];

    public function __construct(private string $name,private array $concerts = [])
     {

     }

    public function addNewConcertDate(string $date, string $location): void
    {
        $this->concert = [
            'date' =>  $date,
            'location' => $location
        ];
        $this->notify(); //on notifie les observateurs de la modification de l'objet MusicBand
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer): void
    {
        $index = array_search($observer, $this->observers, true);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
