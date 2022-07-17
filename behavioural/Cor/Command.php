<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Cor;

final class Command
{
    private int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }
}
