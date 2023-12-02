<?php
declare(strict_types=1);

require './vendor/autoload.php';

use Data\Reader;

$data = Reader::getDataForDay(1, Reader::DATA);

echo '1 : ' . substr_count($data[0], '(') - substr_count($data[0], ')');

echo "\n";

$position = 0;
foreach (str_split($data[0]) as $count => $step) {

    if ($step === '(') {
        $position++;
    }

    if ($step === ')') {
        $position--;
    }

    if ($position === -1) {
        break;
    }
}

echo '2 : ' . $count + 1;