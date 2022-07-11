<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Structural\Decorator\BasicLogger;
use SiThuSan\Structural\Decorator\HtmlDecorator;
use SiThuSan\Structural\Decorator\TimeDecorator;

final class DecoratorTest extends TestCase
{
    private string $date;

    protected function setUp(): void
    {
        $this->date = \date('Y-m-d');
    }

    public function testCanLogWithHtmlDecorator(): void
    {
        $logger  = new HtmlDecorator(new BasicLogger());
        $this->assertSame("<html>Logging</html>", $logger->log("Logging"),);
    }

    public function testCanLogWithTimeDecorator(): void
    {
        $logger = new TimeDecorator(new BasicLogger());
        $this->assertSame("{$this->date} Logging", $logger->log("Logging"));
    }

    public function testCanLogWithHtmlAndTimeDecorator(): void
    {
        $logger = new HtmlDecorator(new TimeDecorator(new BasicLogger()));
        $this->assertSame("<html>{$this->date} Logging</html>", $logger->log("Logging"));
    }
}
