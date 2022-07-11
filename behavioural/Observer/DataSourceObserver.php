<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Observer;

final class DataSourceObserver implements Observer
{
    private string $dataSource;

    private int $objectId;

    public function __construct(int $objectId)
    {
        $this->objectId = $objectId;
    }

    public function update(string $message): void
    {
        $this->dataSource = $message;
    }

    public function getObjectId(): int
    {
        return $this->objectId;
    }
}
