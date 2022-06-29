<?php

declare(strict_types=1);

namespace SiThuSan\Creational\FactoryMethodWithClass;

final class ConsoleLoggerFactory extends LoggerFactory
{
    public function getLogger(): Logger
    {
        return new ConsoleLogger();
    }
}
