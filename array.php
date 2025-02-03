<?php

$animals = ["Babi", "Sapi", "Singa", "Macan", "Kutu"];

for ($i = 0; $i < count($animals); $i++) {
    echo "Nama hewan : $animals[$i]" . PHP_EOL;
}
// $names = ["Jovian", "Caca"];
// // $jumlah = count($names);
// // var_dump($names[0]);

// $names[0] =  "Althaf";
// // var_dump($names);

// $names[] = "Sanjaya";
// var_dump($names);

// KEY BIASANYA DI ARRAY BERUPA INDEX ATAU NUMBER, SEDANGKAN KALAU DI MAP BISA DIUBAH
// $jovian = [
//     "id" => "A",
//     "name" => "Jovian",
//     "age" => 21,
// ];

// var_dump($jovian["name"]);
// // nested array
// $caca = [
//     "id" => "A",
//     "name" => "Jovian",
//     "age" => 21,
//     "address" => [
//         "city" => "jakarta",
//         "country" => "indonesia"
//     ]
// ];
// // access nested array
// var_dump($caca["address"]["country"]);
