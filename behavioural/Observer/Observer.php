<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Observer;

interface Observer
{
    public function update(string $message): void;

    /**
     * This one is only to get the given object to detach.
     */
    public function getObjectId(): int;
}
