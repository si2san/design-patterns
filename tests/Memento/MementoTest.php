<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Behavioural\Memento\Memento;
use SiThuSan\Behavioural\Memento\Originator;

final class MementoTest extends TestCase
{
    public function testCanSaveToMemento(): void
    {
        $originator = new Originator();
        $originator->setState("State1");

        $memento = $originator->saveToMemento();

        $this->assertInstanceOf(Memento::class, $memento);
    }

    public function testCanRestoreStateFromMemento(): void
    {
        $originator = new Originator();
        $originator->setState("State 1");
        $memento = $originator->saveToMemento();

        $originator->setState("State 2");
        $originator->restoreFromMemento($memento);

        $this->assertEquals("State 1", $originator->getState());
    }
}
