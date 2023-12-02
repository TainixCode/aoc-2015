<?php
declare(strict_types=1);

namespace Solutions\Day2;

class Ribbon
{
    public static function calculLength(int $l, int $w, int $h): int
    {
        $sides = [$l, $w, $h];
        sort($sides);

        $length = 2 * $sides[0] + 2 * $sides[1];
        $cube = $l * $w * $h;

        return $length + $cube;
    }
}