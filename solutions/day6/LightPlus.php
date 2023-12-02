<?php
declare(strict_types=1);

namespace Solutions\Day6;

class LightPlus
{
    private int $brightness = 0;

    public function turnOn(): void
    {
        $this->brightness++;
    }
    
    public function turnOff(): void
    {
        $this->brightness--;

        if ($this->brightness < 0) {
            $this->brightness = 0;
        }
    }

    public function toggle(): void
    {
        $this->brightness += 2;
    }

    public function getBrightness(): int
    {
        return $this->brightness;
    }
}