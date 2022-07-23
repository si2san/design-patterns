<?php

declare(strict_types=1);

namespace SiThuSan\Behavioural\Iterator;

use Iterator;

final class CarList implements Iterator
{
    private array $cars;

    private int $currentIndex = 0;

    public function addCar(Car $car): void
    {
        $this->cars[] = $car;
    }

    public function removeCar(Car $carToRemove): void
    {
        foreach ($this->cars as $key => $car) {
            if ($this->isSameCar($car, $carToRemove)) {
                unset($this->cars[$key]);
            }
        }
        $this->cars = \array_values($this->cars);
    }

    public function count(): int
    {
        return \count($this->cars);
    }

    public function current(): Car
    {
        return $this->cars[$this->currentIndex];
    }

    public function key(): int
    {
        return $this->currentIndex;
    }

    public function next(): void
    {
        $this->currentIndex++;
    }

    public function rewind(): void
    {
        $this->currentIndex = 0;
    }

    public function valid(): bool
    {
        return isset($this->cars[$this->currentIndex]);
    }

    private function isSameCar(Car $car, Car $anotherCar): bool
    {
        return $car->getNameWithModelYear() === $anotherCar->getNameWithModelYear();
    }
}
