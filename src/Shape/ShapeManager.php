<?php

namespace USC\CodeChallenge\Shape;

class ShapeManager
{
    /**
     * @var AbstractShape[]
     */
    protected $shapes = [];

    /**
     * @param array $shapes
     */
    public function __construct(array $shapes)
    {
        foreach($shapes as $shape)
        {
            $this->add($shape);
        }    
    }

    /**
     * @param AbstractShape $shape
     *
     * @return $this
     */
    public function add(AbstractShape $shape)
    {
        $this->shapes[get_class($shape)] = $shape;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return AbstractShape
     */
    public function getShape($type)
    {
        return $this->shapes[$type];
    }
    
    /**
     * @return AbstractShape[]
     */
    public function getAllShapes()
    {
        return $this->shapes;
    }
}
