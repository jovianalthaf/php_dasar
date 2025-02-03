<?php

namespace Data;
// gabisa buat objek
abstract class Location
{
    public string $name;
    // Metode abstrak harus diimplementasikan di kelas turunan
    abstract function detectLocation();
}
class City extends Location
{
    public function detectLocation()
    {
        echo "Ini kota : $this->name";
    }
}
