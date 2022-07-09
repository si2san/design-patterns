<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Structural\Decorator\BasicLogger;
use SiThuSan\Structural\Decorator\HtmlDecorator;
use SiThuSan\Structural\Decorator\TimeDecorator;

final class DecoratorTest extends TestCase
{
    public function testCanLogWithHtmlDecorator(): void
    {
        $logger  = new HtmlDecorator(new BasicLogger());
        $this->assertSame("<html>Logging</html>", $logger->log("Logging"),);
    }

    public function testCanLogWithTimeDecorator(): void
    {
        $logger = new TimeDecorator(new BasicLogger());
        $this->assertSame("2022-07-09 Logging", $logger->log("Logging"));
    }

    public function testCanLogWithHtmlAndTimeDecorator(): void
    {
        $logger = new HtmlDecorator(new TimeDecorator(new BasicLogger()));
        $this->assertSame("<html>2022-07-09 Logging</html>", $logger->log("Logging"));
    }
}
