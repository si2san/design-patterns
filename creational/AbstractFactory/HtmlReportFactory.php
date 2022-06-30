<?php

declare(strict_types=1);

namespace SiThuSan\Creational\AbstractFactory;

final class HtmlReportFactory extends ReportFactory
{
    public function createHeader(): ReportHeader
    {
        return new HtmlHeader();
    }

    public function createBody(): ReportBody
    {
        return new HtmlBody();
    }
}
