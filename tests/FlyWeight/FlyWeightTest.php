<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Structural\FlyWeight\TextFactory;

final class FlyWeightTest extends TestCase
{
    public function testTest(): void
    {
        $chars = ['C', 'A', 'B', 'C', 'D', 'E', 'E'];

        foreach ($chars as $char) {
            $text = TextFactory::make($char);
            $this->assertEquals("Rendering {$char}", $text->render());
        }

        $this->assertCount(5, TextFactory::getChars());
    }
}
