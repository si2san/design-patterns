<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Meditator;

final class ChatMediator implements ChatMediatorInterface
{
    private array $users;

    private array $receivedMessages;

    public function addUser(User $user): void
    {
        $this->users[] = $user;
    }

    public function sendMessage(User $user, string $message): void
    {
        foreach ($this->users as $u) {
            if ($u->getUserName() !== $user->getUserName()) {
                $this->receivedMessages[] = $u->receiveMessage($message);
            }
        }
    }

    public function getReceivedMessages(): array
    {
        return $this->receivedMessages;
    }
}
