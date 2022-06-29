<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Creational\FactoryMethodWithClass\ConsoleLogger;
use SiThuSan\Creational\FactoryMethodWithClass\ConsoleLoggerFactory;
use SiThuSan\Creational\FactoryMethodWithClass\Logger;
use SiThuSan\Creational\FactoryMethodWithClass\XMLLogger;
use SiThuSan\Creational\FactoryMethodWithClass\XMLLoggerFactory;

final class FactoryMethodWithClassTest extends TestCase
{
    public function testCanGetConsoleLogger(): void
    {
        $logger = (new ConsoleLoggerFactory())->getLogger();
        $this->assertInstanceOf(ConsoleLogger::class, $logger);
    }

    public function testCanGetXMlLogger(): void
    {
        $logger = (new XMLLoggerFactory())->getLogger();
        $this->assertInstanceOf(XMLLogger::class,$logger);
    }
}
