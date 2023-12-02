<?php
declare(strict_types=1);

require './vendor/autoload.php';

use Data\Reader;
use Solutions\Day2\Present;
use Utils\Utils;

$data = Reader::getDataForDay(2, Reader::DATA);

echo '1 : ' . 
    Utils::sum($data, function($value) {
        $present = Present::createFromText($value);
        return $present->getWrappingPaperSurface();
    });

echo "\n";

echo '2 : ' . 
    Utils::sum($data, function($value) {
        $present = Present::createFromText($value);
        return $present->getRibbonLength();
    });