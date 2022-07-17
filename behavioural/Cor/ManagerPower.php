<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Cor;

final class ManagerPower extends PurchasePower
{
    protected int $allow = parent::BASE * 10;

    public function handleRequest(Command $command): string
    {
        if (parent::canHandleByCurrentSuccessor($command)) {
            return "Sale handled by Manager!";
        }

        return parent::handleRequestBySuccessor($command);
    }
}
