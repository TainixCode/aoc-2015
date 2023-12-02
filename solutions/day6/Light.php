<?php
declare(strict_types=1);

namespace Solutions\Day6;

class Light
{
    private string $state = 'off';

    public function turnOn(): void
    {
        $this->state = 'on';
    }
    
    public function turnOff(): void
    {
        $this->state = 'off';
    }

    public function toggle(): void
    {
        if ($this->state === 'on') {
            $this->state = 'off';
        } else {
            $this->state = 'on';
        }
    }

    public function getState(): string
    {
        return $this->state;
    }
}