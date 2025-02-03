<?php 
// date_default_timezone_set('Asia/Jakarta');
$now = new dateTime();
// test timeset 
$now->setDate(2025,1,9);
// var_dump($now);
// Tentukan deadline (1 hari dari sekarang)
// $deadline = (clone $now)->add(new DateInterval("P1D"));
$deadline = new DateTime();
$printdl = $deadline->setDate(2025,1,8);
// var_dump($deadline);
// var_dump($now);


if($now > $deadline ){
    // tanggal 7 > 8 ? false, masuk ke else
    // tanggal 9 > 8? true
    echo "Payment telat, Waktu Payment : {$deadline->format("Y-m-d")}" . PHP_EOL;
    echo "Waktu Sekarang : {$now->format("Y-m-d")}" . PHP_EOL;
}else{

    echo "Payment berhasil dan anda bayar di Waktu Payment : {$now->format("Y-m-d")}" . PHP_EOL;
    echo "Waktu Deadline  : {$deadline->format("Y-m-d")}" . PHP_EOL;
}


// var_dump($now, $deadline);

// $dateTime->setDate(1990,1,20);
// $dateTime->setTime(10,10,10);

// $dateTime->add(new DateInterval("P1Y"));

// $minusOneMonth = new DateInterval("P1M");
// $minusOneMonth->invert = 1;
// $dateTime->add($minusOneMonth);
// var_dump($dateTime);

// $now = new DateTime();
// var_dump($now);

// $now->setTimezone(new DateTimeZone("America/Toronto"));
// var_dump($now);

// echo $now->format("Y-m-d H:i:s"). PHP_EOL;



// echo 'Loaded php.ini: ' . php_ini_loaded_file();
?>