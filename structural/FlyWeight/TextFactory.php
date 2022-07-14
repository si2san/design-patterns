<?php

declare(strict_types=1);

namespace SiThuSan\Structural\FlyWeight;

final class TextFactory
{
    private static  $chars = [];

    public static function make(string $char): Text
    {
        if (!isset(self::$chars[$char])) {
            self::$chars[$char] = new Character($char);
        }

        return self::$chars[$char];
    }

    public static function getChars(): array
    {
        return self::$chars;
    }
}
