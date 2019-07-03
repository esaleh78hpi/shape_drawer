<?php

require_once __DIR__.'/../vendor/autoload.php';

require_once 'load_factories.php';
require_once 'load_shapes.php';

/**
 * @return string
 */
function getMenuSelection()
{
    $menuItems = 'Please select your choice: ' .  PHP_EOL . PHP_EOL;
    $menuItems .= '1- Print Circle' . PHP_EOL;
    $menuItems .= '2- Print Square' . PHP_EOL;
    $menuItems .= '3- Print All Shapes' . PHP_EOL;
    $menuItems .= '4- Do nothing & exit' . PHP_EOL;
    $menuItems .= PHP_EOL . ': ';

    printf($menuItems);

    $action = fgetc(STDIN);

    return $action;
}
