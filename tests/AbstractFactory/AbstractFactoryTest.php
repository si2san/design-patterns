<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Creational\AbstractFactory\HtmlBody;
use SiThuSan\Creational\AbstractFactory\HtmlHeader;
use SiThuSan\Creational\AbstractFactory\HtmlReportFactory;
use SiThuSan\Creational\AbstractFactory\XmlBody;
use SiThuSan\Creational\AbstractFactory\XmlHeader;
use SiThuSan\Creational\AbstractFactory\XmlReportFactory;

final class AbstractFactoryTest extends TestCase
{
    public function testCanGetHtmlReportHeader(): void
    {
        $factory = new HtmlReportFactory();
        $this->assertInstanceOf(HtmlHeader::class, $factory->createHeader());
    }

    public function testCanGetHtmlReportBody(): void
    {
        $factory = new HtmlReportFactory();
        $this->assertInstanceOf(HtmlBody::class, $factory->createBody());
    }

    public function getCanGetXmlReportHeader(): void
    {
        $factory = new XmlReportFactory();
        $this->assertInstanceOf(XmlHeader::class, $factory->createHeader());
    }

    public function testcanGetXmlReportBody(): void
    {
        $factory = new XmlReportFactory();
        $this->assertInstanceOf(XmlBody::class,$factory->createBody());
    }
}
