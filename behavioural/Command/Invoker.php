<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Command;

final class Invoker
{
    public array $history = [];

    public function invoke(Command $command): string
    {
        $this->history[] = $command;

        return $command->execute();
    }

    public function undo(): string
    {
        // remove last action
        \array_pop($this->history);

        return \end($this->history)->execute();
    }
}
