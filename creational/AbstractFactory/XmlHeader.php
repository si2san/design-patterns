<?php

declare(strict_types=1);

namespace SiThuSan\Creational\AbstractFactory;

final class XmlHeader extends ReportHeader
{
    public function generateHeader(): void
    {
        echo "Header in XML!";
    }
}
