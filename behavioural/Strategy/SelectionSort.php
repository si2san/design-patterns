<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Strategy;

final class SelectionSort implements SortStrategy
{
    public function sort(): string
    {
        return "Sorting with selection sort!";
    }
}
