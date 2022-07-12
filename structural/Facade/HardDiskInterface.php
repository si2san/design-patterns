<?php

declare(strict_types=1);

namespace SiThuSan\Structural\Facade;

interface HardDiskInterface
{
    public function readBootSector(): void;
}
