<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Creational\FactoryMethod\DriverManager;
use SiThuSan\Creational\FactoryMethod\MySqlConnection;
use SiThuSan\Creational\FactoryMethod\OracleConnection;

final class FactoryMethodTest extends TestCase
{
    public function testCanNotGetInvalidConnection(): void
    {
        $this->expectException(LogicException::class);
        DriverManager::getConnection("a");
    }

    public function testCanGetMysqlConnection(): void
    {
        $instance = DriverManager::getConnection("mysql");
        $this->assertInstanceOf(MySqlConnection::class, $instance);
    }
    
    public function testCanGetOracleConnection(): void
    {
        $instance = DriverManager::getConnection("oracle");
        $this->assertInstanceOf(OracleConnection::class, $instance);
    }
}
