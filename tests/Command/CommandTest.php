<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Behavioural\Command\CopyCommand;
use SiThuSan\Behavioural\Command\EditCommand;
use SiThuSan\Behavioural\Command\Invoker;
use SiThuSan\Behavioural\Command\PasteCommand;

final class CommandTest extends TestCase
{
    private Invoker $invoker;

    private CopyCommand $copyCommand;

    private EditCommand $editCommand;

    private PasteCommand $pasteCommand;

    protected function setUp(): void
    {
        $this->invoker = new Invoker();
        $this->copyCommand = new CopyCommand();
        $this->editCommand = new EditCommand();
        $this->pasteCommand = new PasteCommand();
    }

    public function testCanRunAllCommand(): void
    {
        $this->assertSame("Copying", $this->invoker->invoke($this->copyCommand));
        $this->assertSame("Editing", $this->invoker->invoke($this->editCommand));
        $this->assertSame("Pasting", $this->invoker->invoke($this->pasteCommand));
    }

    public function testCanUndoCommand(): void
    {
        $this->invoker->invoke($this->copyCommand);
        $this->invoker->invoke($this->editCommand);
        $this->invoker->invoke($this->pasteCommand);

        $this->assertSame("Editing", $this->invoker->undo());
    }
}
