<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Template;

abstract class FrameworkAction
{
    protected array $actionList;

    private function auth(): void
    {
        $this->actionList[] = "Authentication!";
    }

    private function logging(): void
    {
        $this->actionList[] = "Logging!";
    }

    protected abstract function businessLogic(): void;

    public final function process(): void
    {
        $this->auth();
        $this->businessLogic();
        $this->logging();
    }

    public function getActionList(): array
    {
        return $this->actionList;
    }
}
