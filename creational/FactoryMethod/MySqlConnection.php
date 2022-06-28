<?php

declare(strict_types=1);

namespace SiThuSan\Creational\FactoryMethod;

final class MySqlConnection implements Connection
{
    public function open(): void
    {
        echo "MySql Connection opened!</br>";
    }

    public function close(): void
    {
        echo "MySql Connection closed.!</br>";
    }
}
