<?php 
class Product {

    // private vivsibility hanya bisa diakses di dalam class
    // protected visibility subclass atau turunan bisa memakai 
    // public visibility semua bisa mengakses
    protected string $name;
    protected int $price;

    // can access variabel private because still inside same class
    public function __construct($name,$price) {
        // $jovian->name = $name;
        $this->name = $name;
        $this->price = $price;
    }
    public function getName(): string{
        return $this->name;
    }
    public function getPrice(): int{
        return $this->price;
    }

    public function getAllData(){
        return "Name : {$this->name} ,  Price : {$this->price}";
        
        
    }
}

class ProductDummy extends Product{
    public function info()
    {
        echo "Name $this->name" . PHP_EOL;
        echo "Price $this->price" . PHP_EOL;
    }
}
?>