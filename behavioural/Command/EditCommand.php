<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Command;

final class EditCommand implements Command
{
    public function execute(): string
    {
        return "Editing";
    }
}
