<?php

declare(strict_types=1);

namespace SiThuSan\Creational\FactoryMethodWithClass;

interface Logger
{
    public function log(string $message): void;
}
