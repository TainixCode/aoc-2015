<?php
declare(strict_types=1);

require './vendor/autoload.php';

use Data\Reader;
use Solutions\Day6\Decoration;
use Solutions\Day6\DecorationPlus;

$data = Reader::getDataForDay(6, Reader::DATA);

$decoration = new Decoration;

foreach ($data as $action) {
    $decoration->action($action);
}

echo '1 : ' . $decoration->countOn();

echo "\n";


$decoration = new DecorationPlus;

foreach ($data as $action) {
    $decoration->action($action);
}

echo '2 : ' . $decoration->getTotalBrightness();

echo "\n";