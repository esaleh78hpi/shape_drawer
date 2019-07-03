<?php

use USC\CodeChallenge\Factory\ShapeFactory;
use USC\CodeChallenge\Factory\CircleFactory;
use USC\CodeChallenge\Factory\SquareFactory;

/**
 * @return ShapeFactory
 */
function loadFactories()
{
    $shapeFactory = new ShapeFactory([]);

    $shapeFactory->add(new CircleFactory());
    $shapeFactory->add(new SquareFactory());

    return $shapeFactory;
}
