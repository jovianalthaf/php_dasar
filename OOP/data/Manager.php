<?php
// parent
class Manager
{
    var string $name;

    function sayHello(string $name): void
    {
        echo "Hi $name,my name is Manager $this->name" . PHP_EOL;
    }
}
// turunan
class VicePresident extends Manager
{
    var string $name;
    var int $umur;
    function sayHello(string $name): void
    {
        echo "Hi $name,my name is $this->name dan jabatan saya VP " . PHP_EOL;
    }

    function age(int $umur): void
    {

        echo "umur saya adalah $this->umur  dan umur kamu $umur" . PHP_EOL;
    }
}
