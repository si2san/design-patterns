<?php

declare(strict_types=1);

namespace SiThuSan\Creational\Builder;

final class TextBuilder
{
    private ?string $displayValue = null;

    private ?string $font = null;

    private ?string $color = null;

    private ?string $decoration = null;

    public function setDisplayValue(?string $displayValue): self
    {
        $this->displayValue = $displayValue;

        return $this;
    }

    public function setFont(?string $font): self
    {
        $this->font = $font;

        return $this;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function setDecoration(?string $decoration): self
    {
        $this->decoration = $decoration;

        return $this;
    }

    public function getDisplayValue(): ?string
    {
        return $this->displayValue;
    }

    public function getFont(): ?string
    {
        return $this->font;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function getDecoration(): ?string
    {
        return $this->decoration;
    }

    public function build(): Text
    {
        return new Text($this);
    }
}
