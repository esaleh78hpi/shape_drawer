<?php

namespace USC\CodeChallenge\Shape;

class Circle extends AbstractShape
{
    /**
     * @var float
     */
    protected $radius;

    /**
     * @param string $color
     * @param int $borderSize
     * @param float $radius
     */
    public function __construct($color, $borderSize, $radius)
    {
        parent::__construct($color, $borderSize);

        $this->radius = $radius;
    }

    /**
     * @param float $radius
     *
     * @return $this
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;

        return $this;
    }

    /**
     * @return float
     */
    public function getRadius()
    {
        return $this->radius;
    }

    public function draw()
    {
        printf("Drawing a circle with radius %f\n", $this->radius);
    }
    
    /**
     * @param string $type
     *
     * @return bool
     */
    public function canHandle($type)
    {
        return (strtolower($type) === "circle");
    }
}
