<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Memento;

final class Originator
{
    private string $state;

    public function setState(string $state): void
    {
        $this->state = $state;
    }

    public function saveToMemento(): Memento
    {
        return new Memento($this->state);
    }

    public function restoreFromMemento(Memento $memento): void
    {
        $this->state = $memento->getSavedState();
    }

    public function getState(): string
    {
        return $this->state;
    }
}
