<?php

declare(strict_types=1);

namespace SiThuSan\Creational\AbstractFactory;

abstract class ReportHeader
{
    public abstract function generateHeader(): void;
}
