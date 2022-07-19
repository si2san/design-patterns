<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Template;

final class SaleAction extends FrameworkAction
{
    protected function businessLogic(): void
    {
        $this->actionList[] = "Sale Action!";
    }
}
