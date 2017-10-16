<?php
namespace Dobras\Flags;
class dreieck extends Flag implements FlagInterface {
    private $width;
    private $height;
    /**
     * dreieck constructor.
     * @param string $bezeichnung
     * @param string $farbe
     * @param int $width
     * @param int $height
     */
    public function __construct(string $bezeichnung, string $farbe, int $base, int $height)
    {
        parent::__construct($bezeichnung, $farbe);
        $this->width = $width;
        $this->height = $height;
    }
    /**
     * @return float
     */
    public function getArea():float{
        return 0.5*$this->width*$this->height;
    }
}