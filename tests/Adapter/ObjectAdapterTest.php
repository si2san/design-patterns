<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Structural\Adapter\LegacyClass;
use SiThuSan\Structural\Adapter\ObjectAdapter;

final class ObjectAdapterTest extends TestCase
{
    public function testSameBehaviourAsLegacyCode(): void
    {
        $legacyClass = new LegacyClass();
        $newApi = new ObjectAdapter();
        $this->assertEquals($legacyClass->isPushed(), $newApi->isAdded());
    }
}
