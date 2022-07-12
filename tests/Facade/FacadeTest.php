<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Structural\Facade\BiosInterface;
use SiThuSan\Structural\Facade\CpuInterface;
use SiThuSan\Structural\Facade\Facade;
use SiThuSan\Structural\Facade\HardDiskInterface;
use SiThuSan\Structural\Facade\MemoryInterface;
use SiThuSan\Structural\Facade\OsInterface;

final class FacadeTest extends TestCase
{
    private CpuInterface $cpu;

    private HardDiskInterface $hardDisk;

    private MemoryInterface $memory;

    private BiosInterface $bios;

    private OsInterface $os;

    protected function setUp(): void
    {
        $this->cpu = $this->createMock(CpuInterface::class);
        $this->hardDisk = $this->createMock(HardDiskInterface::class);
        $this->memory = $this->createMock(MemoryInterface::class);
        $this->bios = $this->createMock(BiosInterface::class);
        $this->os = $this->createMock(OsInterface::class);
    }

    public function testComputerStart(): void
    {
        $this->makeMock();

        $facade = new Facade(
            $this->cpu,
            $this->hardDisk,
            $this->memory,
            $this->bios,
            $this->os
        );

        $facade->start();

        $this->assertSame('MacOs', $this->os->getName());
    }

    private function makeMock(): void
    {
        $this->os->method('getName')
            ->will($this->returnValue('MacOs'));
        $this->bios->method('launch')->with($this->os);
    }
}
