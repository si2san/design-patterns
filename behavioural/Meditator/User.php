<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Meditator;

abstract class User implements ChatUserInterface
{
    private string $userName;

    protected ChatMediatorInterface $mediator;

    public function __construct(ChatMediatorInterface $mediator, string $userName)
    {
        $this->mediator = $mediator;
        $this->userName = $userName;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    public abstract function sendMessage(string $message): string;

    public abstract function receiveMessage(string $message): string;
}
