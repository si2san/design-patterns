<?php

declare(strict_types=1);

namespace SiThuSan\Creational\AbstractFactory;

abstract class ReportFactory
{
    public abstract function createHeader(): ReportHeader;

    public abstract function createBody(): ReportBody;
}
