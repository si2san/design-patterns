<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Command;

final class PasteCommand implements Command
{
    public function execute(): string
    {
        return "Pasting";
    }
}
