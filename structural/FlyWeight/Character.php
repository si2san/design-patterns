<?php

declare(strict_types=1);

namespace SiThuSan\Structural\FlyWeight;

final class Character implements Text
{
    private string $character;

    public function __construct(string $character)
    {
        $this->character = $character;
    }

    public function render(): string
    {
        return "Rendering {$this->character}";
    }
}
