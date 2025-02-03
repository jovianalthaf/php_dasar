<?php

$daftarMenus = [
    ["1. Teh Botol", 5000],
    ["2. Indomie Goreng", 6000],
    ["3. Indomie Goreng + Telor", 8000],
    ["4. Kopi ABC", 3000],
    ["5. Babi", 10000],
];


$students2D = [
    [
        "name" => "Budi",
        "nilai" => 80
    ],
    [
        "name" => "jovian",
        "nilai" => 81
    ],

];

foreach ($students2D as $student) {
    echo "Name : {$student["name"]}, Nilai {$student["nilai"]}" . PHP_EOL;
}


echo "SELAMAT DATANG DI WARUNG MPI" . PHP_EOL;

echo "Apakah kamu mau melihat daftar menu ? (Y/N)";
$jawaban = trim(fgets(STDIN));

if ($jawaban = "Y") {
    foreach ($daftarMenus as $menu) {
        echo "Nama Menu: {$menu[0]} ---- Harga Menu: Rp{$menu[1]}" . PHP_EOL;
    }
    // foreach ($daftarMenus as $dataArray) {
    //     foreach ($dataArray as $daftarMenu) {
    //         echo "Nama Menu : $daftarMenu[0] ---- Harga Menu : $daftarMenu[1]" . PHP_EOL;
    //     }
    // }

    echo "Mau Pilih menu yang mana ? ";
    $jawabanMenu = trim(fgets(STDIN));
    // Convert pilihan menjadi indeks array (mengurangi 1 karena array dimulai dari 0)
    $pilihanIndex = intval($jawabanMenu) - 1;
    if (isset($daftarMenus[$pilihanIndex])) {
        $menuDipilih = $daftarMenus[$pilihanIndex];
        echo "{$menuDipilih[0]} disiapkan dengan harga Rp{$menuDipilih[1]}, bisa bayar di kasir." . PHP_EOL;
    } else {
        echo "Menu tidak ditemukan. Silakan pilih menu yang tersedia." . PHP_EOL;
    }
} else {
    echo "Keluar Dari Aplikasi Warung Mpi";
}
