<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Meditator;

final class ChatUser extends User
{
    public function __construct(ChatMediatorInterface $mediator, string $userName)
    {
        parent::__construct($mediator, $userName);
        $mediator->addUser($this);
    }

    public function sendMessage(string $message): string
    {
        return "User {$this->getUserName()} send message to mediator {$message}.";
    }

    public function receiveMessage(string $message): string
    {
        return "User {$this->getUserName()} receive message {$message}.";
    }
}
