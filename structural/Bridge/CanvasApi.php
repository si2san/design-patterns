<?php

declare(strict_types=1);

namespace SiThuSan\Structural\Bridge;

final class CanvasApi implements DrawingApi
{
    public function drawCircle(): string
    {
        return "Canvas draw circle";
    }

    public function drawRectangle(): string
    {
        return "Canvas draw rectangle";
    }
}
