<?php



// for ($counter = 1; $counter <= 10 ;$counter++){

//     echo "ini adalah loop i statement ke - $i" . PHP_EOL;

// }   

$totalDonasi = 0;

echo "Masukkan Jumlah murid : ";
$murid = trim(fgets(STDIN)); // Meminta input jumlah murid dari pengguna
for ($i = 1; $i <= $murid; $i++) {
    echo "================= PROGRAM UANG KAS =================" . PHP_EOL;
    echo "Murid ke-$i" . PHP_EOL;

    echo "Masukkan nama anda : ";
    $nama = trim(fgets(STDIN));
    echo "Halo,$nama" . PHP_EOL;

    echo "Berapa uang jajan kamu : ";
    $uang = trim(fgets(STDIN));


    echo "Donasi untuk kelas : ";
    $donasi = trim(fgets(STDIN));
    echo "Masukkan kategori donasi (1: Olahraga, 2: Perpustakaan, 3: Kegiatan Sosial) : ";
    $kategori = trim(fgets(STDIN));
    $totalHasilDonasiKategori = 0;
    if ($uang < 0) {
        $uang = $uang;
    }
    while ($kategori == 1 || $kategori == 2 || $kategori == 3) {
        if ($kategori == 1) {
            echo "Masukkan Jumlah Donasi untuk olahraga : ";
            $jawabanOlahraga = trim(fgets(STDIN));
            if ($uang <= $jawabanOlahraga) {
                echo "Saldo tidak cukup, Saldo kamu $uang" . PHP_EOL;
            }
            $totalHasilDonasiKategori += $jawabanOlahraga;
        } else if ($kategori == 2) {
            echo "Masukkan Jumlah Donasi untuk Perpustakaan : ";
            $jawabanPerpus = trim(fgets(STDIN));
            if ($uang <= $jawabanPerpus) {
                echo "Saldo tidak cukup, Saldo kamu $uang" . PHP_EOL;
            }

            $totalHasilDonasiKategori += $jawabanPerpus;
        } else if ($kategori == 3) {
            echo "Masukkan Jumlah Donasi untuk Kegiatan Sosial ";
            $jawabanKS = trim(fgets(STDIN));
            if ($uang <= $jawabanKS) {
                echo "Saldo tidak cukup, Saldo kamu $uang" . PHP_EOL;
            }
            $totalHasilDonasiKategori += $jawabanKS;
        } else {
            echo "Error!";
        }
        echo "Tekan 0 Untuk keluar dari donasi kategori  " . PHP_EOL;
        echo "Tekan 9 Untuk Mengisi Saldo" . PHP_EOL;
        $kategori = trim(fgets(STDIN)); // Minta input ulang untuk keluar dari loop

    }


    $totalUangJajan = ($uang - $donasi) - $totalHasilDonasiKategori;

    echo "Total uang kamu : $totalUangJajan" . PHP_EOL;
    $totalDonasi += $donasi;
    echo PHP_EOL . "================= LAPORAN =================" . PHP_EOL;
    echo "Total Donasi dari semua murid: $totalDonasi" . PHP_EOL;
    echo "Total Donasi tambahan berdasarkan kategori : $totalHasilDonasiKategori" . PHP_EOL;
}
