<?php

declare(strict_types=1);

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

$instance = Singleton::getSingleton();
$instance->api();

$instance2 = Singleton::getSingleton();
$instance2->api();

if ($instance === $instance2) {
    echo "Same!";
}
