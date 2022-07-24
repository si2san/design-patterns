<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\State;

final class FullState implements StateInterface
{
    public function doAction(StateContext $stateContext): void
    {
        echo "FullState!";
    }

    public function toString(): string
    {
        return "FullState!";
    }
}
