<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Observer;

final class DataSource implements Subject
{
    private array $observers = [];

    private int $count = 0;

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void
    {
        $this->observers = \array_filter(
            $this->observers,
            fn ($v) => $v->getObjectId() !== $observer->getObjectId()
        );
    }

    public function notify(string $message): void
    {
        foreach ($this->observers as $observer) {
            $this->count++;
            $observer->update($message);
        }
    }

    public function getChangedCount(): int
    {
        return $this->count;
    }
}
