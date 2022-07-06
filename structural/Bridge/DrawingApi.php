<?php

declare(strict_types=1);

namespace SiThuSan\Structural\Bridge;

interface DrawingApi
{
    // return string to test
    public function drawCircle(): string;

    public function drawRectangle(): string;
}
