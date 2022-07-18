<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Command;

final class CopyCommand implements Command
{
    public function execute(): string
    {
        return "Copying";
    }
}
