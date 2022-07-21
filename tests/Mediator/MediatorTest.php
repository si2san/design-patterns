<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Behavioural\Meditator\ChatMediator;
use SiThuSan\Behavioural\Meditator\ChatMediatorInterface;
use SiThuSan\Behavioural\Meditator\ChatUser;
use SiThuSan\Behavioural\Meditator\User;

final class MediatorTest extends TestCase
{
    private ChatMediatorInterface $chatMediator;

    protected function setUp(): void
    {
        $this->chatMediator = new ChatMediator();
    }

    public function testCanReceiveMessagesExceptSender(): void
    {
        $message = "Hello";
        $this->chatMediator->sendMessage(
            $this->prepareChatUsersAndSender(),
            $message
        );

        $this->assertSame(
            [
                "User User1 receive message {$message}.",
                "User User2 receive message {$message}.",
                "User User4 receive message {$message}.",
            ],
            $this->chatMediator->getReceivedMessages()

        );
    }

    public function testCanReceiveMessageToMediator(): void
    {
        $this->assertSame(
            "User UserOne send message to mediator Hello World!.",
            (new ChatUser($this->chatMediator, "UserOne"))->sendMessage("Hello World!")
        );
    }

    private function prepareChatUsersAndSender(): User
    {
        new ChatUser($this->chatMediator, "User1");
        new ChatUser($this->chatMediator, "User2");
        $user3 = new ChatUser($this->chatMediator, "User3");
        new ChatUser($this->chatMediator, "User4");

        return $user3;
    }
}
