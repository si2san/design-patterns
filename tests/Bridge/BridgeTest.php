<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Structural\Bridge\CanvasApi;
use SiThuSan\Structural\Bridge\Circle;
use SiThuSan\Structural\Bridge\DrawingApi;
use SiThuSan\Structural\Bridge\Rectangle;
use SiThuSan\Structural\Bridge\SvgApi;

class BridgeTest extends TestCase
{
    private DrawingApi $canvasApi;

    private DrawingApi $svgApi;

    protected function setUp(): void
    {
        $this->canvasApi = new CanvasApi();
        $this->svgApi = new SvgApi();
    }

    public function testCanDrawCanvasCicrle(): void
    {
        $cicrle = (new Circle($this->canvasApi))->draw();
        $this->assertEquals("Canvas draw circle", $cicrle);
    }

    public function testCanDrawSvgCircle(): void
    {
        $cicrle = (new Circle($this->svgApi))->draw();
        $this->assertEquals("Svg draw circle", $cicrle);
    }

    public function testCanDrawCanvsRectangle(): void
    {
        $rectangle = (new Rectangle($this->canvasApi))->draw();
        $this->assertEquals("Canvas draw rectangle", $rectangle);
    }

    public function testCanDrawSvgRectangle(): void
    {
        $rectangle = (new Rectangle($this->svgApi))->draw();
        $this->assertEquals("Svg draw rectangle", $rectangle);
    }
}
