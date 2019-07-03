<?php

namespace USC\CodeChallenge\Factory;

use USC\CodeChallenge\Shape\AbstractShape;

interface ShapeFactoryInterface
{
    /**
     * @param array $config
     *
     * @return AbstractShape
     */
    public function create(array $config);
    
    /**
     * @param string $type
     *
     * @return bool
     */
    public function canCreate($type);
}
