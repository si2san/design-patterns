<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Iterator;

final class Car
{
    private string $name;

    private int $modelYear;

    public function __construct(string $name, int $modelYear)
    {
        $this->name = $name;
        $this->modelYear = $modelYear;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getModelYear(): int
    {
        return $this->modelYear;
    }

    public function getNameWithModelYear(): string
    {
        return "{$this->name} {$this->modelYear} Model!";
    }
}
