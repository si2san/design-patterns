<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Behavioural\Observer\DataSource;
use SiThuSan\Behavioural\Observer\DataSourceObserver;

final class ObserverTest extends TestCase
{
    public function testChangeAllObserversOnSubscriberChange(): void
    {
        $dataSource = new DataSource();

        $observer = new DataSourceObserver(1);
        $observer2 = new DataSourceObserver(2);
        $observer3 = new DataSourceObserver(3);
        $dataSource->attach($observer);
        $dataSource->attach($observer2);
        $dataSource->attach($observer3);

        $dataSource->notify("Data");

        $this->assertEquals(3, $dataSource->getChangedCount());
    }

    public function testCanDetachObserverAfterAttached(): void
    {
        $dataSource = new DataSource();

        $observer = new DataSourceObserver(1);
        $observer2 = new DataSourceObserver(2);
        $observer3 = new DataSourceObserver(3);
        $dataSource->attach($observer);
        $dataSource->attach($observer2);
        $dataSource->attach($observer3);

        $dataSource->detach($observer2);
        $dataSource->notify("Data");

        $this->assertEquals(2,$dataSource->getChangedCount());
    }
}
