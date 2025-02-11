<?php
// 4 3 2 1
// 3 2 1
// 2 1
// 1
function reverseAngka($n)
{
    // n = 4 
    // $i = 4; 4 >= 1 ? true 
    // $i = 3; 3 >= 1 ? true 
    // $i = 2; 2 >= 1 ? true 
    // $i = 1; 1 >= 1 ? true 
    // $i = 0; 1 >= 1 ? false TIDAK DI EKSEKUSI

    for ($i = $n; $i >= 1; $i--) {
        $s = '';
        // // SALAH 
        // // $j = 1, 1 <= 4 ? true,eksekusi $j++  ,$j = 1 
        // // $j = 2, 2 <= 4? true , eksekusi $j++ , $j = 2
        // // $j = 3, 3 <= 4? true , eksekusi $j++ , $j = 3
        // // $j = 4, 4 <= 4? true , eksekusi $j++ , $j = 4
        // // $j = 5, 5 <= 4? false , TIDAK eksekusi $j++ KARENA FALSE  , $j = 5

        // //  echo 4444

        // // $j = 1, 1 <= 4 ? true,eksekusi $j++  ,$j = 1 
        // // $j = 2, 2 <= 4? true , eksekusi $j++ , $j = 2
        // // $j = 3, 3 <= 4? true , eksekusi $j++ , $j = 2
        // // $j = 4, 4 <= 4? true , eksekusi $j++ , $j = 2
        // // $j = 4, 4 <= 4? true , eksekusi $j++ , $j = 2

        // n = 4 
        // $i = 4; 4 >= 1 ? true 
        // $i = 3; 3 >= 1 ? true 
        // $i = 2; 2 >= 1 ? true 
        // $i = 1; 1 >= 1 ? true 
        // $i = 0; 1 >= 1 ? false TIDAK DI EKSEKUSI

        // $j = 4, 4 >= 1 ? true, eksekusi $j--  ,$j = 4 
        // $j = 3, 3 >= 1? true , eksekusi $j-- , $j = 3
        // $j = 2, 2 >= 1? true , eksekusi $j-- , $j = 2
        // $j = 1, 1 >= 1? true , eksekusi $j-- , $j = 1
        // $j = 0, 0 >= 1? false TIDAK DI EKSEKUSI  $j-- , $j = 1
        for ($j = $i; $j >= 1; $j--) {
            echo  $j;
        }
        echo PHP_EOL;
    }
}

function Angka($n)
{
    // n = 5 
    // 1
    // 1 2 
    // 1 2 3 
    // 1 2 3 4 
    // 1 2 3 4 5
    for ($i = 1; $i <= $n; $i++) {
        echo $i;
        // $j = 1, 1 <= 1 ? true, echo $j,
        // $j = 2, 1 <= 1 ? false

        // jalanin iterasi $i++
        // $j = 1; 1 <= 2 ? true, echo 1,
        // $j = 2; 2 <= 2 ? true, echo 2  
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo PHP_EOL;
    }
}

Angka(5);
// reverseAngka(5);
