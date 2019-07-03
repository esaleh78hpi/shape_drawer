<?php

namespace USC\CodeChallenge\Shape;

use USC\CodeChallenge\Shape\ShapeManager;

class ShapeDrawer
{
    /**
     * @var ShapeManager
     */
    protected $shapeManager;

    /**
     * @param ShapeManager $shapeManager
     */
    public function __construct(ShapeManager $shapeManager)
    {
        $this->shapeManager = $shapeManager;   
    }

    /**
     * @param string $type
     */
    function drawShape($type)
    {
        $allShapes = $this->shapeManager->getAllShapes();

        foreach ($allShapes as $shape) {
            if ($shape->canHandle($type)) {
                $shape->draw();
            }
        }
    }

    function drawAllShapes()
    {
        $allShapes = $this->shapeManager->getAllShapes();

        foreach ($allShapes as $shape) {
            $shape->draw();
        }
    }
}
