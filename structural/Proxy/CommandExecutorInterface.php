<?php

declare(strict_types=1);

namespace SiThuSan\Structural\Proxy;

interface CommandExecutorInterface
{
    public function runCommand(string $command): string;
}
