<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\State;

final class StateContext
{
    private StateInterface $currentState;

    public function __construct(StateInterface $initial)
    {
        $this->currentState = $initial;
    }

    public function changeState(StateInterface $newState): void
    {
        $this->currentState = $newState;
    }

    public function doAction(): void
    {
        $this->currentState->doAction($this);
    }

    public function toString(): string
    {
        return $this->currentState->toString();
    }
}
