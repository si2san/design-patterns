<?php

declare(strict_types=1);

namespace SiThuSan\Structural\Composite;

final class ViewGroup extends UiWidget
{
    private array $children;

    public function paint(): string
    {
        $paintResult = "";

        foreach ($this->children as $child) {
            $paintResult .= $child->paint();
        }

        return $paintResult;
    }

    public function add(UiWidget $child): void
    {
        $this->children[] = $child;
    }
}
