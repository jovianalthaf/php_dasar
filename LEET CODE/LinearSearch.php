<?php

function linearSearch($arr, $target)
{



    foreach ($arr as $index => $value) {
        echo "Cek indeks $index: nilai = $value" . PHP_EOL;
        if ($value == $target) {
            return $value;
        }
    }
    return -1;
}


$numbers = [5, 2, 3, 7];

echo linearSearch($numbers, 3);
