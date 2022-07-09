<?php

declare(strict_types=1);

namespace SiThuSan\Structural\Decorator;

final class BasicLogger implements Logger
{
    public function log(string $message): string
    {
        return $message;
    }
}
