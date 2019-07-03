<?php

namespace USC\CodeChallenge;

use USC\CodeChallenge\Shape\ShapeDrawer;

require_once 'autoload.php';

$shapeManager = loadShapes();
$shapeDrawer = new ShapeDrawer($shapeManager);

switch (getMenuSelection()) {
    case '1':
        $shapeDrawer->drawShape('circle');
        break;
    case 2:
        $shapeDrawer->drawShape('square');
        break;
    case 3:
        $shapeDrawer->drawAllShapes();
        break;
    case 4:
        break;
}
