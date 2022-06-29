<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Creational\Singleton\Singleton;

final class SingletonTest extends TestCase
{
    public function testThereIsOnlyOneInstanceAcrossApplication(): void
    {
        $instance = Singleton::getSingleton();
        $instance2 = Singleton::getSingleton();

        $this->assertEquals($instance, $instance2);
    }
}
