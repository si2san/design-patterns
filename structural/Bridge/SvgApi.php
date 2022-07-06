<?php

declare(strict_types=1);

namespace SiThuSan\Structural\Bridge;

final class SvgApi implements DrawingApi
{
    public function drawCircle(): string
    {
        return "Svg draw circle";
    }

    public function drawRectangle(): string
    {
        return "Svg draw rectangle";
    }
}
