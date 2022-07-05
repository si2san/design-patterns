<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Structural\Adapter\ClassAdapter;
use SiThuSan\Structural\Adapter\LegacyClass;

final class ClassAdapterTest extends TestCase
{
    public function testSameBehaviourAsLegacyCode(): void
    {
        $legacyClass = new LegacyClass();
        $newApi = new ClassAdapter();
        $this->assertEquals($legacyClass->isPushed(), $newApi->isAdded());
    }
}
