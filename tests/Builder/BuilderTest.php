<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Creational\Builder\Text;

final class BuilderTest extends TestCase
{
    public function testCanBuildTextOnlyWithDisplayValue(): void
    {
        $builder = Text::builder()->setDisplayValue("Text")->build();
        $this->assertInstanceOf(Text::class, $builder);
    }

    public function testCanBuildTextWithDisplayValueAndFont(): void
    {
        $builder = Text::builder()->setDisplayValue("Text")->setFont("utf-8")->build();
        $this->assertInstanceOf(Text::class, $builder);
    }

    public function testCanBuildTextWithDisplayValueAndFontAndColor(): void
    {
        $builder = Text::builder()->setDisplayValue("Text")->setFont("utf-8")->setColor("red")->build();
        $this->assertInstanceOf(Text::class, $builder);
    }

    public function testCanBuildTextWithAllParams(): void
    {
        $builder = Text::builder()->setDisplayValue("Text")->setFont("utf-8")->setColor("Red")->setDecoration("underline")->build();
        $this->assertInstanceOf(Text::class, $builder);
    }
}
