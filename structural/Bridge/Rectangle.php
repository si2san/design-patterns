<?php

declare(strict_types=1);

namespace SiThuSan\Structural\Bridge;

final class Rectangle extends Shape
{
    private DrawingApi $drawingApi;

    public function __construct(DrawingApi $drawingApi)
    {
        $this->drawingApi = $drawingApi;
    }

    public function draw(): string
    {
        return $this->drawingApi->drawRectangle();
    }
}
