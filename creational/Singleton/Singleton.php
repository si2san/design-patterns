<?php

declare(strict_types=1);

namespace SiThuSan\Creational\Singleton;

final class Singleton
{
    private static ?self $instance = null;

    private function __construct()
    {
        echo "Singleton created<br>";
    }

    public static function getSingleton(): self
    {
        if (\is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function api(): void
    {
        echo "Single API</br>";
    }
}
