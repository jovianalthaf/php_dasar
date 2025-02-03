<?php 
function sayHello($nama){
    echo "Hello function $nama" . PHP_EOL;
}
sayHello("jovian");


function tambah($angka1,$angka2){
    return $angka1 + $angka2;
    echo "Hasil perjumlahan angka 1 dan angka 2 adalah $result ";
    
}

function sum(...$values){
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total : " . implode(",",$values). " = $total". PHP_EOL;
}

// tambah(1,2);
sum(1,2,3,4,5);

?>