<?php

declare(strict_types=1);

namespace SiThuSan\Creational\AbstractFactory;

final class HtmlBody extends ReportBody
{
    public function generateBody(): void
    {
        echo "Body in HTML!";
    }
}
