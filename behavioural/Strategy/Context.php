<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Strategy;

final class Context
{
    private SortStrategy $sortStrategy;

    public function getSortStrategy(): SortStrategy
    {
        return $this->sortStrategy;
    }

    public function setSortStrategy(SortStrategy $sortStrategy): void
    {
        $this->sortStrategy = $sortStrategy;
    }

    public function sort(): string
    {
        return $this->sortStrategy->sort();
    }
}
