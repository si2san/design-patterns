<?php

declare(strict_types=1);

namespace SiThuSan\Structural\Adapter;

final class ObjectAdapter implements NewApi
{
    private LegacyClass $legacyObject;

    // should be DI on real world. This is only to show adapter.
    public function __construct()
    {
        $this->legacyObject = new LegacyClass();
    }

    public function isAdded(): bool
    {
        return $this->legacyObject->isPushed();
    }
}
