<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Strategy;

final class MergedSort implements SortStrategy
{
    public function sort(): string
    {
        return "Sorting with merged sort!";
    }
}
