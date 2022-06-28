<?php

declare(strict_types=1);

namespace SiThuSan\Creational\FactoryMethod;

use LogicException;

final class DriverManager
{
    private static array $connections = [
        'mysql' => MySqlConnection::class,
        'oracle' => OracleConnection::class
    ];

    public static function getConnection(string $type): Connection
    {
        if (!array_key_exists($type, self::$connections)) {
            throw new LogicException("Connection is not provided !");
        }

        return new self::$connections[$type];
    }
}
