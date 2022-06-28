<?php

declare(strict_types=1);

namespace SiThuSan\Creational\FactoryMethod;

final class OracleConnection implements Connection
{
    public function open(): void
    {
        echo "Oracle connection opened!</br>";
    }

    public function close(): void
    {
        echo "Oracle connection closed!</br>";
    }
}
