<?php
declare(strict_types=1);

namespace Solutions\Day6;

class Decoration
{
    /**
     * @var array<string, Light> $lights
     */
    private array $lights;

    public function __construct()
    {
        for ($i = 0; $i <= 999; $i++) {
            for ($j = 0; $j <= 999; $j++) {
                $this->lights["$i.$j"] = new Light;
            }
        }
    }

    public function action(string $action): void
    {
        // Parsing

            // Action
            if (strpos($action, 'turn on') === 0) {
                $method = 'turnOn';
                $action = str_replace('turn on ', '', $action);
            }

            if (strpos($action, 'turn off') === 0) {
                $method = 'turnOff';
                $action = str_replace('turn off ', '', $action);
            }

            if (strpos($action, 'toggle') === 0) {
                $method = 'toggle';
                $action = str_replace('toggle ', '', $action);
            }

            // coordonnées
            $action = str_replace(' through ', ',', $action); // comme ça on a a,b,c,d

            [$xStart, $yStart, $xEnd, $yEnd] = explode(',', $action);

        // Actions
        for ($i = $xStart; $i <= $xEnd; $i++) {
            for ($j = $yStart; $j <= $yEnd; $j++) {
                $this->lights["$i.$j"]->$method();
            }
        }
    }

    public function countOn(): int
    {
        $count = 0;
        foreach ($this->lights as $light) {
            if ($light->getState() === 'on') {
                $count++;
            }
        }

        return $count;
    }
}