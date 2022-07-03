<?php

declare(strict_types=1);

namespace SiThuSan\Creational\Builder;

final class Text
{
    private ?string $displayValue;

    private ?string $font;

    private ?string $color;

    private ?string $decoration;

    public function __construct(TextBuilder $builder)
    {
        $this->displayValue = $builder->getDisplayValue();
        $this->font = $builder->getFont();
        $this->color = $builder->getColor();
        $this->decoration = $builder->getDecoration();
    }

    public static function builder(): TextBuilder
    {
        return new TextBuilder();
    }
}
