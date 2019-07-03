<?php

namespace USC\CodeChallenge\Shape;

abstract class AbstractShape
{
    /**
     * @var string
     */
    protected $color;
    
    /**
     * @var int
     */
    protected $borderSize;

    public function __construct($color, $borderSize)
    {
        $this->color = $color;
        $this->borderSize = $borderSize;
    }

    /**
     * @param string $color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param int $borderSize
     *
     * @return $this
     */
    public function setBorderSize($borderSize)
    {
        $this->borderSize = $borderSize;

        return $this;
    }

    /**
     * @return int
     */
    public function getBorderSize()
    {
        return $this->borderSize;
    }

    abstract public function draw();
    
    /**
     * @param string $type
     *
     * @return bool
     */
    abstract public function canHandle($type);
}
