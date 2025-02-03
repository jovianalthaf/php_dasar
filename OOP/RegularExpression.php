<?php 
// subject = string yang ingin dicari
// preg_match_all("pattern","subject")
// $matches = [];
// $result = preg_match_all("/eko|awan|jovian/i","Jovian Althaf Sanjaya",$matches);
// var_dump($result);
// var_dump($matches);

// $resultKasar = preg_replace("/anjing|bangsat/i","***","dasar lu anjing,bangsat");
// var_dump($resultKasar);
 

// // /s = spasi
// $resultSplit = preg_split("/[\s]/","Jovian Althaf Sanjaya, MPI-GAMING");

// var_dump($resultSplit);


function findMatchesInWord(string $word): array
{
    $matches = [];

    $result = preg_match_all("/eko|awan|jovian/i",$word,$matches);
    return [
        '$count' => $result,
        '$matches' => $matches[0],
    ];
}

$result = findMatchesInWord("Jovian Althaf Sanjaya");
print_r($result);
?>