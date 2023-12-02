<?php
declare(strict_types=1);

namespace Solutions\Day5;

class StringAnalyzer
{
    public static function isNice(string $string): bool
    {
        // Séquences interdites
        $forbidens = ['ab', 'cd', 'pq', 'xy'];
        foreach ($forbidens as $forbiden) {
            if (strpos($string, $forbiden) !== false) {
                return false;
            }
        }

        // Compte les voyelles
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $count = 0;
        foreach (str_split($string) as $letter) {
            $count += (int) in_array($letter, $vowels);
        }

        if ($count < 3) {
            return false;
        }

        // Recherche 2 lettres consécutives
        $letter = $string[0];
        for ($i = 1; $i < strlen($string); $i++) {
            if ($letter == $string[$i]) {
                return true;
            }

            $letter = $string[$i];
        }

        return false;
    }

    public static function isBetterNice(string $string): bool
    {
        // Paire qui se répètent
        $find = false;

        for ($i = 0; $i < strlen($string) - 3; $i++) { // Pas besoin de tester les derniers caractères, c'est trop tard !
            $sequence = $string[$i] . $string[$i+1];

            $nb = substr_count($string, $sequence, $i + 2);

            if ($nb > 0) {
                $find = true;
                break;
            }
        }

        if (! $find) {
            return false;
        }

        // Recherche 2 lettres consécutives avec une au milieu
        $letter = $string[0];
        for ($i = 1; $i < strlen($string) - 1; $i++) {
            if ($letter == $string[$i + 1]) {
                return true;
            }

            $letter = $string[$i];
        }

        return false;
    }
}