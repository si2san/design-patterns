<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Structural\Composite\View;
use SiThuSan\Structural\Composite\ViewGroup;

final class CompositeTest extends TestCase
{
    public function testCanPaint(): void
    {
        $viewGroup = new ViewGroup();
        $view1 = new View("View One");
        $view2 = new View("View Two");
        $viewGroup->add($view1);
        $viewGroup->add($view2);

        $this->assertSame("View One is painting.View Two is painting.", $viewGroup->paint());
    }
}
