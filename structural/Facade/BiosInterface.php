<?php

declare(strict_types=1);

namespace SiThuSan\Structural\Facade;

interface BiosInterface
{
    public function waitForKeyPress(): void;

    public function launch(OsInterface $os);
}
