<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Memento;

final class Memento
{
    private string $state;

    public function __construct(string $state)
    {
        $this->state = $state;
    }

    public function getSavedState(): string
    {
        return $this->state;
    }
}
