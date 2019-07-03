<?php

namespace USC\CodeChallenge\Factory;

use USC\CodeChallenge\Shape\AbstractShape;

class ShapeFactory
{
    /**
     * @var ShapeFactoryInterface[]
     */
    protected $factories = [];

    /**
     * @param array $factories
     */
    public function __construct(array $factories)
    {
        foreach($factories as $factory) {
            $this->add($factory);
        }    
    }

    /**
     * @param ShapeFactoryInterface $factory
     *
     * @return $this
     */
    public function add(ShapeFactoryInterface $factory)
    {
        $this->factories[] = $factory;

        return $this;
    }

    /**
     * @param string $type
     * @param array $config
     *
     * @return AbstractShape
     */
    public function createShape($type, array $config)
    {
        foreach ($this->factories as $factory) {
            if ($factory->canCreate($type)) {
                $shape = $factory->create($config);
                
                return $shape;
            }
        }
    }
}
