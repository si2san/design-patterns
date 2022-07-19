<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Behavioural\Strategy\Context;
use SiThuSan\Behavioural\Strategy\MergedSort;
use SiThuSan\Behavioural\Strategy\SelectionSort;

final class StrategyTest extends TestCase
{
    private Context $context;

    protected function setUp(): void
    {
        $this->context = new Context();
    }

    public function testCanSortWithMergedSort(): void
    {
        $this->context->setSortStrategy(new MergedSort());
        $this->assertSame("Sorting with merged sort!", $this->context->sort());
    }

    public function testCanSortWithSelectionSort(): void
    {
        $this->context->setSortStrategy(new SelectionSort());
        $this->assertSame("Sorting with selection sort!", $this->context->sort());
    }
}
