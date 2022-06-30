<?php

declare(strict_types=1);

namespace SiThuSan\Creational\AbstractFactory;

abstract class ReportBody
{
    public abstract function generateBody(): void;
}
