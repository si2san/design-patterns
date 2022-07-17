<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Cor;

final class DirectorPower extends PurchasePower
{
    protected int $allow = parent::BASE * 20;

    public function handleRequest(Command $command): string
    {
        if (parent::canHandleByCurrentSuccessor($command)) {
            return "Sale handled by Director!";
        }

        return parent::handleRequestBySuccessor($command);
    }
}
