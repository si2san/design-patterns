<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Template;

final class ReportAction extends FrameworkAction
{
    protected function businessLogic(): void
    {
        $this->actionList[] = "Report Action!";
    }
}
