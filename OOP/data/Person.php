<?php 
class Person
{
    // properties/fields di dalam class
   var string $name;
   var ?string $address = null; //nullable
   var string $country = "Indonesia"; //default value if value is empty
   
    // create function
    function __construct(string $name,string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }
   function sayHello(?string $name)
   {
        if(is_null($name)){
            echo "Hi, my name is $this->name" . PHP_EOL;
        }else{
            echo "Halo $name, my name is $this->name" . PHP_EOL;
        }
   }

   function checkAddress(?string $address)
   {
        if(is_null($address)){
            echo "I Live at $this->address" . PHP_EOL;
        }else {
            echo "I live at $address, my address is $this->address";
        }
   }
   
}




?>