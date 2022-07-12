<?php

declare(strict_types=1);

namespace SiThuSan\Structural\Facade;

interface CpuInterface
{
    public function freeze(): void;

    public function jump(): void;

    public function execute(): void;
}
