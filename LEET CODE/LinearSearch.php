<?php

function linearSearch($arr, $target)
{
    foreach ($arr as $key => $value) {
        echo "Mencari di index ke-$key dengan nilai $value..." . PHP_EOL;

        if ($value == $target) {
            return $key;
        }
    }
    return -1;
}


$nums = [2, 5, 8, 12, 16, 23, 38, 56, 72, 91];
function binarySearch($arr, $target)
{

    $left = 0;
    $right = count($arr) - 1;

    for (; $left <= $right;) {
        // Index:   0   1   2   3   4   5   6   7   8   9
        // Data:    2   5   8   12  16  23  38  56  72  91
        // target 38
        // LEFT = INDEX 0
        // RIGHT = INDEX 9
        $mid = floor(($left + $right) / 2);
        // (0+9) / 2 = 4 (mid) = 16 < 38 ? true, $left = mid(4) + 1 = 5
        // (5+9) / 2 = 7 (mid) = 56 < 38 ? false, $right = mid(7) - 1 = 6
        // (5+6) / 2 = 5 (mid) = 23 < 38 ? true, $left = mid(5) + 1 = 6
        // (6+6) / 2 = 6 (mid) = 38 == 38 ? true, $mid == target,

        if ($arr[$mid] == $target) {
            return $mid;
        }
        // jika index mid < $target = left = $mid + 1 

        if ($arr[$mid] < $target) {
            $left = $mid + 1;
        } else if ($arr[$mid] > $target) {
            $right = $mid - 1;
        }
    }

    return -1;
}


$target = 38;

$result = binarySearch($nums, $target);
if ($result != -1) {
    echo "Target ditemukan di indeks ke-$result";
} else {
    echo "Target tidak ditemukan";
}
