<?php

declare(strict_types=1);

namespace SiThuSan\Structural\Decorator;

interface Logger
{
    public function log(string $message): string;
}
