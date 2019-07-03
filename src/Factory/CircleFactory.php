<?php

namespace USC\CodeChallenge\Factory;

use USC\CodeChallenge\Shape\AbstractShape;
use USC\CodeChallenge\Shape\Circle;

class CircleFactory implements ShapeFactoryInterface
{
    /**
     * @param array $config
     *
     * @return AbstractShape
     */
    public function create(array $config)
    {
        $shape = new Circle($config['color'], $config['borderSize'], $config['params']['radius']);
        
        return $shape;
    }
    
    /**
     * @param string $type
     *
     * @return bool
     */
    public function canCreate($type)
    {
        return (strtolower($type) === "circle");
    }
}
