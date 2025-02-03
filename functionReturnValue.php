<?php 
function sum(int $first,int $second){
    $total = $first + $second;

    return $total;
}
$result = sum(1,2);
// var_dump($result);

function getFinalValue(int $value){
    if($value >= 80){
        return "A";
    }else if ($value >=70){
        return "B";
    }else if ($value >=60){
        return "C";
    }else if ($value >=50){
        return "D";
    }else{
        return "E";
    }
}

$final = getFinalValue(85);
var_dump($final);

function factorialRecursive(int $value)
{
    if($value == 1){
        return 1;
    }else {
        return $value * factorialRecursive($value - 1 );
    }
}

var_dump(factorialRecursive(1));
?>
