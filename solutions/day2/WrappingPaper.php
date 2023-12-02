<?php
declare(strict_types=1);

namespace Solutions\Day2;

class WrappingPaper
{
    public static function calculSurface(int $l, int $w, int $h): int
    {
        return 2 * $l * $w + 2 * $w * $h + 2 * $h * $l + min([$l * $w, $w * $h, $h * $l]);
    }
}