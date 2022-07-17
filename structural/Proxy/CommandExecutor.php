<?php

declare(strict_types=1);

namespace SiThuSan\Structural\Proxy;

final class CommandExecutor implements CommandExecutorInterface
{
    public function runCommand(string $command): string
    {
        return "Running {$command}";
    }
}
