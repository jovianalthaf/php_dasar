<?php 



// for ($counter = 1; $counter <= 10 ;$counter++){
  
//     echo "ini adalah loop i statement ke - $i" . PHP_EOL;
  
// }   

$totalDonasi = 0;


for ($i = 1; $i <= 5; $i++){
    echo "Masukkan Jumlah murid : ";
    $murid = trim(fgets(STDIN)); // Meminta input jumlah murid dari pengguna
    for($j = 1; $j <= $murid; $j++){
        echo "================= PROGRAM UANG KAS =================" .PHP_EOL;
        echo "Murid ke-$j" . PHP_EOL;
    
        echo "Masukkan nama anda : ";
        $nama = trim(fgets(STDIN));
        echo "Halo,$nama" .PHP_EOL;
        
        echo "Berapa uang jajan kamu : ";
        $uang = trim(fgets(STDIN));
    
        echo "Donasi untuk kelas : ";
        $donasi = trim(fgets(STDIN));
    
        
        $totalUangJajan = $uang - $donasi;
        
        echo "Total uang kamu : $totalUangJajan" . PHP_EOL;
        $totalDonasi += $donasi;
    } 
    echo PHP_EOL . "================= LAPORAN =================" . PHP_EOL;
    echo "Total Donasi dari semua murid: $totalDonasi" . PHP_EOL;

}

?>