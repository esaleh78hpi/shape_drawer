<?php

namespace USC\CodeChallenge\Factory;

use USC\CodeChallenge\Shape\AbstractShape;
use USC\CodeChallenge\Shape\Square;

class SquareFactory implements ShapeFactoryInterface
{
    /**
     * @param array $config
     *
     * @return AbstractShape
     */
    public function create(array $config)
    {
        $shape = new Square(
            $config['color'], 
            $config['borderSize'], 
            $config['params']['width'], 
            $config['params']['height']
        );
        
        return $shape;
    }
    
    /**
     * @param string $type
     *
     * @return bool
     */
    public function canCreate($type)
    {
        return (strtolower($type) === "square");
    }
}
