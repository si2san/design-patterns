<?php

declare(strict_types=1);

namespace SiThuSan\Structural\Proxy;

use LogicException;

final class CommandExecutorProxy implements CommandExecutorInterface
{
    private bool $isAdmin = false;

    private CommandExecutorInterface $commandExecutor;

    private const USER_ADMIN = 'admin';

    private const ADMIN_PASSWORD = 'admin';

    private const COMMAND_RM = 'rm';

    public function __construct(string $user, string $pwd)
    {
        if ($this->isAdminAuthenticate($user, $pwd)) {
            $this->isAdmin = true;
        }

        $this->commandExecutor = new CommandExecutor();
    }

    public function runCommand(string $command): string
    {
        if ($this->isAdmin) {
            return $this->commandExecutor->runCommand($command);
        }
        $this->checkAndFailIfUserHasNotEnoughPermission($command);

        return $this->commandExecutor->runCommand($command);
    }
    
    private function isAdminAuthenticate(string $user, string $pwd): bool
    {
        return $user === self::USER_ADMIN && $pwd === self::ADMIN_PASSWORD;
    }

    private function checkAndFailIfUserHasNotEnoughPermission(string $command): void
    {
        if ($this->isCommandIncludeRemove($command)) {
            throw new LogicException("rm command is not allowed for non-admin users.");
        }
    }

    private function isCommandIncludeRemove(string $command): bool
    {
        return \substr(\strtolower(\trim($command)), 0, 2) === self::COMMAND_RM;
    }
}
