<?php
namespace Dobras\Flags;
class Flag_Kreis extends Flag implements FlagInterface {
    private $radius;
    /**
     * Flag_4 constructor.
     * @param string $bezeichnung
     * @param string $farbe
     * @param int $radius
     */
    public function __construct(string $bezeichnung, string $farbe, int $radius)
    {
        parent::__construct($bezeichnung, $farbe);
        $this->radius = $radius;
    }
    /**
     * @return float
     */
    public function getArea():float{
        return Round((pi() * pow($this->radius, 2)), 2);
    }
}