<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Observer;

interface Subject
{
    public function attach(Observer $observer): void;

    public function detach(Observer $observer): void;

    public function notify(string $message): void;
}
