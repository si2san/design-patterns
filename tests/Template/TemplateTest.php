<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Behavioural\Template\ReportAction;
use SiThuSan\Behavioural\Template\SaleAction;

final class TemplateTest extends TestCase
{
    public function testCanDoSaleAction(): void
    {
        $saleAction = new SaleAction();
        $saleAction->process();

        $this->assertSame([
            "Authentication!",
            "Sale Action!",
            "Logging!"
        ], $saleAction->getActionList());
    }

    public function testCanDoReportAction(): void
    {
        $reportAction = new ReportAction();
        $reportAction->process();

        $this->assertSame([
            "Authentication!",
            "Report Action!",
            "Logging!"
        ], $reportAction->getActionList());
    }
}
