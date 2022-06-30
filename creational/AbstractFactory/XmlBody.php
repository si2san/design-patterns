<?php

declare(strict_types=1);

namespace SiThuSan\Creational\AbstractFactory;

final class XmlBody extends ReportBody
{
    public function generateBody(): void
    {
        echo "Body in XML!";
    }
}
