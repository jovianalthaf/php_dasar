<?php

function factorial($value)
{
    if ($value <= 0) {
        return 1;
    }
    $result = 1;
    for ($i = $value; $i >= 1; $i--) {
        // INDEX YANG DIKALIKAN BUKAN VALUENYA
        // factorial(5,1);
        // factorial(5,4);
        // factorial(20,3);
        // factorial(60,2);
        // factorial(120,1);
        $result *= $i;
    }
    return $result;

    // echo $value;
}

// echo factorial(5);

function factorialRecursive($value)
{
    if ($value <= 0) {
        return 1;
    }



    return $value * (factorialRecursive($value - 1));
}

// echo factorialRecursive(5);


function factorialTailRecursive($total, $value)
{
    if ($value <= 0) {
        return $total;
    } else {
        // factorial(1,5)
        // factorial(5,4)
        // factorial(20,3)
        return factorialTailRecursive($total * $value, $value - 1);
    }
}

echo factorialTailRecursive(1, 5);
