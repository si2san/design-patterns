<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SiThuSan\Behavioural\Iterator\Car;
use SiThuSan\Behavioural\Iterator\CarList;

final class IteratorTest extends TestCase
{
    protected function setUp(): void
    {
        $this->carList = new CarList();
        $this->carList->addCar(new Car("Toyota", 2017));
        $this->carList->addCar(new Car("Honda", 2018));
        $this->carList->addCar(new Car("Mercedes", 2022));
    }

    public function testCanIterateCarList(): void
    {
        $cars = [];

        foreach ($this->carList as $a) {
            $cars[] = $a->getNameWithModelYear();
        }
        $this->assertSame(
            [
                'Toyota 2017 Model!',
                'Honda 2018 Model!',
                'Mercedes 2022 Model!'
            ],
            $cars
        );
    }

    public function testCanAddOneMoreCar(): void
    {
        $this->carList->addCar(new Car("BMW", 2011));
        $this->assertCount(4, $this->carList);
    }

    public function testCanRemoveCar(): void
    {
        $car = new Car("BMW", 2011);
        $this->carList->addCar($car);
        $this->carList->removeCar($car);

        $this->assertCount(3, $this->carList);
    }
}
