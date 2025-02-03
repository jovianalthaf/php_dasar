<?php
function isPalindrome($word)
{
    $temp = "";
    for ($i = strlen($word) - 1; $i >= 0; $i--) {
        echo "Index ke : $i dan Kata : $word[$i]" . PHP_EOL;
        $temp = $word[$i];
    }
    // echo $temp;

    if ($temp == $word[$i]) {
        echo "Kata ini palindrome" . PHP_EOL;
    } else {
        echo "Bukan palindrome";
    }
    return $temp = $word;
}



isPalindrome("radar");
