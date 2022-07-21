<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Meditator;

interface ChatUserInterface
{
    public function receiveMessage(string $message): string;

    public function sendMessage(string $message): string;
}
