<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Behavioural\Cor\Command;
use SiThuSan\Behavioural\Cor\DirectorPower;
use SiThuSan\Behavioural\Cor\ManagerPower;
use SiThuSan\Behavioural\Cor\VicePresidentPower;

final class CorTest extends TestCase
{
    public function testCanChainReponsibility(): void
    {
        $manager = new ManagerPower();
        $director = new DirectorPower();
        $vicePresident = new VicePresidentPower();

        $manager->setSuccessor($director);
        $director->setSuccessor($vicePresident);

        $managerHandle = $manager->handleRequest(new Command(10));
        $this->assertEquals("Sale handled by Manager!", $managerHandle);
        $directorHandle = $manager->handleRequest(new Command(1020));
        $this->assertEquals("Sale handled by Vice President!", $directorHandle);
        $managerHandle2 = $manager->handleRequest(new Command(200));
        $this->assertEquals("Sale handled by Director!", $managerHandle2);
        $directorHandle2 = $manager->handleRequest(new Command(600));
        $this->assertEquals("Sale handled by Vice President!", $directorHandle2);
    }
}
