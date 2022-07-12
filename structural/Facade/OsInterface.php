<?php

declare(strict_types=1);

namespace SiThuSan\Structural\Facade;

interface OsInterface
{
    public function halt(): void;

    public function getName(): string;
}
