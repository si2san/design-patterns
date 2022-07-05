<?php

declare(strict_types=1);

namespace SiThuSan\Structural\Adapter;

final class ClassAdapter extends LegacyClass implements NewApi
{
    public function isAdded(): bool
    {
        return parent::isPushed();
    }
}
