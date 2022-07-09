<?php

declare(strict_types=1);

namespace SiThuSan\Structural\Decorator;

final class HtmlDecorator implements Logger
{
    private Logger $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function log(string $message): string
    {
        return "<html>{$this->logger->log($message)}</html>";
    }
}
