<?php

namespace Model {
    class User
    {
        public function __construct(private ?string $name, private ?int $age) {}
        // Set Data (Setter): Mengisi kotak dengan nilai tertentu.
        public function setName(?string $name): void // void karena tidak perlu ada yg dikembalikan
        {
            $this->name = $name;
        }
        // Get Data (Getter): Mengambil nilai yang sudah ada di dalam kotak.
        public function getName(): string //pengembalian nilai yaitu dengan tipe data string
        {
            return $this->name;
        }

        public function setAge(?int $age): void
        {
            $this->age = $age;
        }

        public function getAge(): int
        {
            return $this->age;
        }

        public function getAll(): array
        {
            return [
                'name' => $this->name,
                'age' => $this->age,
            ];
        }
    }
    class Admin extends User
    {
        public function getAll(): array
        {
            $data = parent::getAll();
            $data['role'] = "Admin";
            return $data;
        }
    }
}
