<?php

namespace USC\CodeChallenge\Shape;

class Square extends AbstractShape
{
    /**
     * @var int
     */
    protected $width;
    
    /**
     * @var int
     */
    protected $height;

    /**
     * @param string $color
     * @param int $borderSize
     * @param int $width
     * @param int $height
     */
    public function __construct($color, $borderSize, $width, $height)
    {
        parent::__construct($color, $borderSize);

        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @param int $width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }   

    /**
     * @param int $height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    public function draw()
    {
        printf("Drawing a square with width %d and height %d\n", $this->width, $this->height);
    }
    
    /**
     * @param string $type
     *
     * @return bool
     */
    public function canHandle($type)
    {
        return (strtolower($type) === "square");
    }
}
