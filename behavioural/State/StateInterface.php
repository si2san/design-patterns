<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\State;

interface StateInterface
{
    public function doAction(StateContext $stateContext): void;

    public function toString(): string;
}
