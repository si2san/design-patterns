<?php

declare(strict_types=1);

namespace SiThuSan\Creational\AbstractFactory;

final class XmlReportFactory extends ReportFactory
{
    public function createHeader(): ReportHeader
    {
        return new XmlHeader();
    }

    public function createBody(): ReportBody
    {
        return new XmlBody();
    }
}
