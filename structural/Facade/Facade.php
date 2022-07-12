<?php

declare(strict_types=1);

namespace SiThuSan\Structural\Facade;

final class Facade
{
    private CpuInterface $cpu;

    private HardDiskInterface $hardDisk;

    private MemoryInterface $memory;

    private BiosInterface $bios;

    private OsInterface $os;

    public function __construct(
        CpuInterface $cpu,
        HardDiskInterface $hardDisk,
        MemoryInterface $memory,
        BiosInterface $bios,
        OsInterface $os
    ) {
        $this->cpu = $cpu;
        $this->hardDisk = $hardDisk;
        $this->memory = $memory;
        $this->bios = $bios;
        $this->os = $os;
    }

    public function start(): void
    {
        $this->hardDisk->readBootSector();
        $this->memory->load();
        $this->cpu->jump();
        $this->cpu->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }
}
