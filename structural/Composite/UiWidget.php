<?php

declare(strict_types=1);

namespace SiThuSan\Structural\Composite;

abstract class UiWidget
{
    public abstract function paint(): string;
}
