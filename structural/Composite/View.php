<?php

declare(strict_types=1);

namespace SiThuSan\Structural\Composite;

// leaf
final class View extends UiWidget
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function paint(): string
    {
        return "{$this->name} is painting.";
    }
}
