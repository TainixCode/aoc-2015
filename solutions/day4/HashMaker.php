<?php
declare(strict_types=1);

namespace Solutions\Day4;

class HashMaker
{
    public static function searchHash(string $key, $nbZeros = 5): int
    {
        $value = 1;

        while (true) {
            $hash = md5($key . $value);

            if (substr($hash, 0, $nbZeros) === str_repeat('0', $nbZeros)) {
                return $value;
            }

            $value++;
        }
    }
}