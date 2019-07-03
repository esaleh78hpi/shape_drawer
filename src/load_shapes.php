<?php

use USC\CodeChallenge\Shape\ShapeManager;

/**
 * @return ShapeManager
 */
function loadShapes()
{
    $shapeFactory = loadFactories();
    $shapeManager = new ShapeManager([]);

    $jsonConfig = file_get_contents('config.json');
    $config = json_decode($jsonConfig, true);

    foreach ($config['shapes'] as $shape) {
        $shape = $shapeFactory->createShape($shape['type'], $shape);
        $shapeManager->add($shape);
    }

    return $shapeManager;
}
