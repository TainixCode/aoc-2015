<?php
declare(strict_types=1);

namespace Solutions\Day2;

class Present
{
    public function __construct(
        public readonly int $l,
        public readonly int $w,
        public readonly int $h,
    ) {}

    public static function createFromText(string $informations): Present
    {
        return new self(...array_map('intval', explode('x', $informations)));
    }

    public function getWrappingPaperSurface(): int
    {
        return WrappingPaper::calculSurface($this->l, $this->w, $this->h);
    }

    public function getRibbonLength(): int
    {
        return Ribbon::calculLength($this->l, $this->w, $this->h);
    }
}