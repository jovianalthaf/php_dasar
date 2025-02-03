<?php

// kelompokkan umur 21 yang kelasnya A 
$mahasiswa = [
    ['nama' => 'Jovian', 'umur' => 21, 'kelas' => 'A'],
    ['nama' => 'Caca', 'umur' => 20, 'kelas' => 'A'],
    ['nama' => 'Wiliam', 'umur' => 21, 'kelas' => 'A'],
    ['nama' => 'Rolando', 'umur' => 21, 'kelas' => 'B'],
    ['nama' => 'Garren', 'umur' => 21, 'kelas' => 'B'],
];

$mahasiswa2 = [
    'nama' => 'jovian',
    'umur' => 10,
    'kelas' => 'A'
];
$cars = [
    ['nama' => "BMW M4", 'terjual' => 100, 'tahun' => 2024, 'harga' => 1000],
    ['nama' => "BMW M3", 'terjual' => 50, 'tahun' => 2024, 'harga' => 2000],
    ['nama' => "BMW M5", 'terjual' => 49, 'tahun' => 2024, 'harga' => 3000],
    ['nama' => "BMW M2", 'terjual' => 50, 'tahun' => 2023, 'harga' => 4000],
];
$carsContohKey = [
    2024 => [
        ['nama' => "BMW M4", 'terjual' => 100, 'tahun' => 2024, 'harga' => 1000],
        ['nama' => "BMW M3", 'terjual' => 50, 'tahun' => 2024, 'harga' => 2000],
        ['nama' => "BMW M5", 'terjual' => 49, 'tahun' => 2024, 'harga' => 3000],

    ],
    2023 => [
        ['nama' => "BMW M2", 'terjual' => 50, 'tahun' => 2023, 'harga' => 4000],
    ]
];

$kelompokMobil = [];
foreach ($cars as $car) {
    $tahun = $car['tahun'];
    if ($car['terjual'] >= 50) {
        // [] <--- push array
        $kelompokMobil[$tahun][] = [
            'nama_mobil' => $car['nama'],
            'terjual' => $car['terjual'],
            'total_penjualan' => $total = $car['harga'] * $car['terjual'],
        ];
    } else {
        [];
    };
}

var_dump($kelompokMobil);

// $printData = [];
// echo $mahasiswa2['nama'];

// foreach ($mahasiswa as $m) {
//     $umur = $m['umur'];
//     if ($m['umur'] >= 21) {
//         $printData[$umur][] = [
//             'name' => $m['nama'],
//             'kelas' => $m['kelas']
//         ];
//     }
// }

// var_dump($printData);



// $mahasiswa[] = ['nama' => 'Adam', 'umur' => 20, 'kelas' => 'C'];

// print_r($mahasiswa);
// ambil setiap data mahasiswa

// $klasifikasi = ['Remaja', 'Dewasa', 'Orang Tua'];
// $kelompokSiswa = [];


// foreach ($klasifikasi as $k) {
// }

// print_r($kelompokSiswa);
