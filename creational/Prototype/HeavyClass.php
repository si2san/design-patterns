<?php

declare(strict_types=1);

namespace SiThuSan\Creational\Prototype;

final class HeavyClass implements PrototypeInterface
{
    // this global variables will need to add some getter methods. 
    // to follow data hiding and program to interface not to implementation.
    // the purpose of this class is to show prototype. 
    private string $propertyGetFromDb;

    private string $computationalHungryProperty;

    public function __construct()
    {
        $this->propertyGetFromDb = self::getPropertyFromDb();
        $this->computationalHungryProperty = self::getComputationalHungryData();
    }

    // think of this function getting a lot of data from db.
    private static function getPropertyFromDb(): string
    {
        return "Property from DB";
    }

    // think of this function processing a huge amount of data .
    private static function getComputationalHungryData(): string
    {
        return "Computentional Hungry Property";
    }

    public function __clone(): void
    {
        echo "Cloning Heavy Class\n";
    }
}
