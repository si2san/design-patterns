<?php

declare(strict_types=1);

namespace SiThuSan\Creational\FactoryMethodWithClass;

use SiThuSan\Creational\FactoryMethodWithClass\Logger;

final class XMLLoggerFactory extends LoggerFactory
{
    public function getLogger(): Logger
    {
        return new XMLLogger();
    }
}
