<?php

declare(strict_types=1);

namespace SiThuSan\Structural\Decorator;

final class TimeDecorator implements Logger
{
    private Logger $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function log(string $message): string
    {
        return \date('Y-m-d') . " " . $this->logger->log($message);
    }
}
