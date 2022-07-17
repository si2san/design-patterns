<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Cor;

final class VicePresidentPower extends PurchasePower
{
    protected int $allow = parent::BASE * 30;

    public function handleRequest(Command $command): string
    {
        return "Sale handled by Vice President!";
    }
}
