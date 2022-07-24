<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\State;

final class HungryState implements StateInterface
{
    public function doAction(StateContext $stateContext): void
    {
        echo "HungryState!";
        $stateContext->changeState(new EatingState());
    }

    public function toString(): string
    {
        return "HungryState";
    }
}
