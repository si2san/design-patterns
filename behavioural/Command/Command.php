<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Command;

interface Command
{
    public function execute(): string;
}
