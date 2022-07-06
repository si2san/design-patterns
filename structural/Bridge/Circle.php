<?php

declare(strict_types=1);

namespace SiThuSan\Structural\Bridge;

final class Circle extends Shape
{
    private DrawingApi $drawingApi;

    // overriding a method just to call the same method from the super class 
    // without performing any other actions is useless and misleading;
    public function __construct(DrawingApi $drawingApi)
    {
        $this->drawingApi = $drawingApi;
    }

    public function draw(): string
    {
        return $this->drawingApi->drawCircle();
    }
}
