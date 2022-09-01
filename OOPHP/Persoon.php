<?php

class Persoon
{
    public $naam;
    private $leeftijd;
    protected $geslacht;
    public $isStudent;
    public $gemiddeldeCijfer;

    function __construct(string $naam, int $leeftijd, string $geslacht)
    {
        $this->naam=$naam;
        $this->leeftijd=$leeftijd;
        $this->geslacht=$geslacht;
        echo "Nieuw Persoon-object aangemaakt <br>";
        echo "De property naam is" . $this->naam;
    }
}