<?php

namespace Test;

use PHPUnit\Framework\TestCase;

use App\User;
use App\MusicBand;

class UserMusicBandTest extends TestCase
{
    public function testBasicLaptop()
    {
        $albert = new User('Albert Mudhat');
        $michelle = new User('Michelle Ectron');
        $yves = new User('Yves Haigé');

        $band = new MusicBand('Daft PHPunk');

        $band->attach($albert);
        $band->attach($michelle);
        $band->attach($yves);

        $band->detach($yves);

        $band->addNewConcertDate('19/11/2027', 'Bercy');

        // Albert et Michelle notifiés de la nouvelle date de concert car ils sont attachés à l'objet MusicBand
        $this->assertTrue($albert->isNotified());
        $this->assertTrue($michelle->isNotified());
        // Yves n'est pas notifié car il a été détaché de l'objet MusicBand
        $this->assertFalse($yves->isNotified());
    }
}
