<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\State;

final class EatingState implements StateInterface
{
    public function doAction(StateContext $stateContext): void
    {
        echo "EatingState!";
        $stateContext->changeState(new FullState());
    }

    public function toString(): string
    {
        return "EatingState!";
    }
}
