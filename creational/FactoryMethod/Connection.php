<?php

declare(strict_types=1);

namespace SiThuSan\Creational\FactoryMethod;

interface Connection
{
    public function open(): void;

    public function close(): void;
}
