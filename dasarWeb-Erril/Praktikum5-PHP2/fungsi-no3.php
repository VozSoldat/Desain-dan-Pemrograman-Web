<?php 
// no3
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya " . $nama . " <br>";
    echo "Senang berkenalan dengan Anda <br>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Hamdana","Halo");

echo "<hr>";

$saya = "Erril";
$ucapanSalam = "Selamat Pagi";

// memanggil lagi
perkenalan($saya);

?>