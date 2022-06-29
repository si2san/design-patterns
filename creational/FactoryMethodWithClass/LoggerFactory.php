<?php

declare(strict_types=1);

namespace SiThuSan\Creational\FactoryMethodWithClass;

use SiThuSan\Creational\FactoryMethodWithClass\Logger;

abstract class LoggerFactory
{
    abstract public function getLogger(): Logger;
}
