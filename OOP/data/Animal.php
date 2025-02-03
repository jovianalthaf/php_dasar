<?php 
namespace Data;

abstract class Animal
{
    public string $name;

    // gaboleh pake body atau {}
    abstract public function run(): void;

    public function stopRun()
    {
        echo "$this->name is Stop Run" . PHP_EOL;
    }
}

class Cat extends Animal {
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }
    
}

class Dog extends Animal {
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }
}




?>