<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Structural\Proxy\CommandExecutorProxy;

final class ProxyTest extends TestCase
{
    public function testAdminCanRunAllCommand(): void
    {
        $commandExecutor = new CommandExecutorProxy("admin", "admin");
        $notepadCommandResult = $commandExecutor->runCommand("notepad");
        $rmCommandResult = $commandExecutor->runCommand("rm");

        $this->assertEquals("Running notepad", $notepadCommandResult);
        $this->assertEquals("Running rm", $rmCommandResult);
    }

    public function testCanNotRunRmIfNotAdmin(): void
    {
        $this->expectException(LogicException::class);

        $commandExecutor = new CommandExecutorProxy("user", "user");
        $commandExecutor->runCommand("rm");
    }

    public function testUserCanRunOtherCommands(): void
    {
        $commandExecutor = new CommandExecutorProxy("user", "user");
        $notepadCommandResult = $commandExecutor->runCommand("notepad");

        $this->assertEquals("Running notepad", $notepadCommandResult);
    }
}
