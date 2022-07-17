<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Cor;

abstract class PurchasePower
{
    protected const BASE = 10;

    private self $successor;

    abstract function handleRequest(Command $command): string;

    protected function getSuccessor(): self
    {
        return $this->successor;
    }

    public function setSuccessor(self $successor): void
    {
        $this->successor = $successor;
    }

    protected function canHandleByCurrentSuccessor(Command $command)
    {
        return $command->getAmount() <= $this->allow;
    }

    protected final function handleRequestBySuccessor(Command $command): string
    {
        if (!\is_null($this->getSuccessor())) {
            return $this->getSuccessor()->handleRequest($command);
        }
    }
}
