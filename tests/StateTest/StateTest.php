<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Behavioural\State\EatingState;
use SiThuSan\Behavioural\State\HungryState;
use SiThuSan\Behavioural\State\StateContext;

final class StateTest extends TestCase
{
    private const FULL_STATE = "FullState!";

    public function testCanChangeStateFromHungryToFull(): void
    {
        $context = new StateContext(new HungryState());
        $context->doAction();
        $context->doAction();

        $this->assertSame(self::FULL_STATE, $context->toString());
    }

    public function testCanChangeStateFromEatToFull(): void
    {
        $context = new StateContext(new EatingState());
        $context->doAction();

        $this->assertSame(self::FULL_STATE, $context->toString());
    }

    public function testFullIsTheLastState(): void
    {
        $context = new StateContext(new HungryState());
        $context->doAction();
        $context->doAction();
        $context->doAction();
        $context->doAction();
        $context->doAction();

        $this->assertSame(self::FULL_STATE, $context->toString());
    }
}
