<?php
declare(strict_types=1);

require './vendor/autoload.php';

use Data\Reader;
use Solutions\Day5\StringAnalyzer;
use Utils\Utils;

$data = Reader::getDataForDay(5, Reader::DATA);

echo '1 : ' . 
    Utils::sum($data, function($value) {
        return (int) StringAnalyzer::isNice($value);
    });

echo "\n";

echo '2 : ' . 
    Utils::sum($data, function($value) {
        return (int) StringAnalyzer::isBetterNice($value);
    });