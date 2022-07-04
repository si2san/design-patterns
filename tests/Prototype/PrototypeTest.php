<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Creational\Prototype\HeavyClass;

final class PrototypeTest extends TestCase
{
    public function testCanCloneHeavyClass(): void
    {
        $heavyObject = new HeavyClass();

        for ($i = 0; $i < 3; $i++) {
            $clonedHeaveyObject = clone $heavyObject;
            $this->assertInstanceOf(HeavyClass::class, $clonedHeaveyObject);
        }
    }
}
