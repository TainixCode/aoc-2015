<?php
declare(strict_types=1);

require './vendor/autoload.php';

use Data\Reader;
use Solutions\Day4\HashMaker;

$data = Reader::getDataForDay(4, Reader::SAMPLE);

echo '1 : ' . HashMaker::searchHash('ckczppom', 5);
echo "\n";
echo '2 : ' . HashMaker::searchHash('ckczppom', 6);