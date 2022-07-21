<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Meditator;

use SiThUSan\Behavioural\Meditator\User;

interface ChatMediatorInterface
{
    public function addUser(User $user): void;

    public function sendMessage(User $user, string $message): void;

    public function getReceivedMessages(): array;
}
