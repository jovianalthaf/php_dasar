<?php

namespace Data {
    interface HasBrand
    {
        function getBrand(): String;
    }

    interface IsMaintenance
    {
        function IsMaintenance(): Bool;
    }


    // sama seperti abstract function, kalau implement boleh lebi dari 1 contoh car,x,y,z dan kalau extends hanya 1 tidak boleh lebih
    interface Car extends HasBrand
    {
        function drive(): void;
        function getTire(): int;
    }
    class Avanza implements Car, IsMaintenance
    {
        public function IsMaintenance(): bool
        {
            return false;
        }
        public function getBrand(): string
        {
            return "Toyota";
        }
        public function drive(): void
        {
            echo "Drive Avanza" . PHP_EOL;
        }

        public function getTire(): int
        {
            return 4;
        }
    }
};




namespace Model {
    // interface itu kontrak
    interface Vehicle
    {
        function move();
    }
    interface FlyingVehicle
    {
        function fly();
    }
    class Airplane implements Vehicle, FlyingVehicle
    {
        private ?string $name;
        public function __construct(string $name)
        {
            $this->name = $name;
        }

        // getter and setter
        public function setName(string $name): void
        {
            // alasan menggunakan setter dan getter bisa memvalidasi input
            $this->name = ucfirst($name);
            // $this->name = $name;
        }
        public function getName(): string
        {
            return $this->name;
        }
        public function move()
        {
            echo "$this->name Mobil bergerak" . PHP_EOL;
        }
        public function fly()
        {
            echo "$this->name Pesawat terbang" . PHP_EOL;
        }
    }
}
