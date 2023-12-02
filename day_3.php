<?php
declare(strict_types=1);

require './vendor/autoload.php';

use Data\Reader;
use Solutions\Day3\Santa;

$data = Reader::getDataForDay(3, Reader::DATA);

$santa = new Santa;
foreach (str_split($data[0]) as $sign) {
    $santa->move($sign);
}

echo '1 : ' . $santa->getNbHousesVisited();

echo "\n";

$santa = new Santa;
$robotSanta = new Santa;

$signs = $data[0];
for ($i = 0; $i < strlen($signs); $i++) {

    if ($i % 2 == 0) {
        $santa->move($signs[$i]);
    } else {
        $robotSanta->move($signs[$i]);
    }
}

$merge = array_merge($santa->getHousesRecord(), $robotSanta->getHousesRecord());
echo '2 : ' . count(array_unique($merge));