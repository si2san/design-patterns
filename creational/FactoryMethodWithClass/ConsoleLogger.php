<?php

declare(strict_types=1);

namespace SiThuSan\Creational\FactoryMethodWithClass;

final class ConsoleLogger implements Logger
{
    public function log(string $message): void
    {
        echo "Console->{$message}";
    }
}
