<?php
// $bintang = 10;
// for ($i = 1; $i <= $bintang; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo "*"; // Cetak bintang
//     }
//     echo PHP_EOL;
// }


function fizzbuz($number)
{
    $counter = 1;
    while ($counter <= $number) {
        if ($counter % 3 == 0 && $counter % 5 == 0) {
            echo "Fizzbuzz" . PHP_EOL;
        } else if ($counter % 3 == 0) {
            echo "fizz" . PHP_EOL;
        } else if ($counter % 5 == 0) {
            echo "buzz" . PHP_EOL;
        } else {
            echo $counter . PHP_EOL;
        }
        $counter++;
    }
}


fizzbuz(10);


// Outer loop untuk jumlah baris
// for ($i = 1; $i <= $bintang; $i++) {
//     // Inner loop untuk jumlah bintang di setiap baris
//     for ($j = 1; $j <= $i; $j++) {
//         echo "*"; // Cetak bintang
//     }
//     echo PHP_EOL; // Pindah ke baris berikutnya
// }
