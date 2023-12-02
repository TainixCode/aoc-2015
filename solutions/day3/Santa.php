<?php
declare(strict_types=1);

namespace Solutions\Day3;

class Santa
{
    /**
     * @param string[] $housesRecord
     */
    private array $housesRecord = []; // La première maison

    private int $x = 0;
    private int $y = 0;

    public function move(string $sign): void
    {
        $this->visitHouse();

        if ($sign === '>') {
            $this->x++;
        }

        if ($sign === '<') {
            $this->x--;
        }

        if ($sign === '^') {
            $this->y++;
        }

        if ($sign === 'v') {
            $this->y--;
        }

        $this->visitHouse();
    }

    private function visitHouse(): void
    {
        $coordinates = "$this->x . $this->y";

        if (! in_array($coordinates, $this->housesRecord)) {
            $this->housesRecord[] = $coordinates;
        }
    }

    public function getNbHousesVisited(): int
    {
        return count($this->housesRecord);
    }

    /**
     * @return string[]
     */
    public function getHousesRecord(): array
    {
        return $this->housesRecord;
    }
}