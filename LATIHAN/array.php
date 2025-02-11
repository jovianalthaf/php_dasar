<?php
$mahasiswa = [
    [
        "id" => 1,
        "nama" => "Andi Pratama",
        "jurusan" => "Informatika",
        "angkatan" => 2022
    ],
    [
        "id" => 2,
        "nama" => "Budi Santoso",
        "jurusan" => "Teknik Mesin",
        "angkatan" => 2021
    ],
    [
        "id" => 3,
        "nama" => "Citra Lestari",
        "jurusan" => "Sistem Informasi",
        "angkatan" => 2023
    ],
    [
        "id" => 4,
        "nama" => "Dewi Anggraini",
        "jurusan" => "Informatika",
        "angkatan" => 2020
    ],
    [
        "id" => 5,
        "nama" => "Eka Saputra",
        "jurusan" => "Teknik Elektro",
        "angkatan" => 2022
    ],
    [
        "id" => 6,
        "nama" => "Farhan Maulana",
        "jurusan" => "Sistem Informasi",
        "angkatan" => 2021
    ],
    [
        "id" => 7,
        "nama" => "Gita Permata",
        "jurusan" => "Teknik Mesin",
        "angkatan" => 2023
    ],
    [
        "id" => 8,
        "nama" => "Hadi Prakoso",
        "jurusan" => "Informatika",
        "angkatan" => 2024
    ]
];
$totalAngkatan2022  = 0;
$dataJadwal = [];
foreach ($mahasiswa as $m) {
    $jurusan = $m['jurusan'];

    $angkatan = $m['angkatan'];

    if ($angkatan == 2022) {
        $totalAngkatan2022++;
    }




    $dataJadwal[$jurusan][] = [
        'id' => $m['id'],
        'nama' => $m['nama'],
        'jurusan' => $m['jurusan'],
        'angkatan' => $m['angkatan'],

    ];

    // return json_encode([
    //     'data_mahasiswa' => $dataJadwal,
    //     'total_angkatan_2022' => $totalAngkatan2022
    // ]);
}

echo json_encode(
    [
        'data' => $dataJadwal,
        'total_angkatan_2022' => $totalAngkatan2022,
    ],
    JSON_PRETTY_PRINT
);
