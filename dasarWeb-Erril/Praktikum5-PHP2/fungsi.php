<?php 
// no1
// function perkenalan(){
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Erril <br>";
//     echo "Senang berkenalan dengan Anda <br>";
// }

// // memanggil fungsi yang sudah dibuat
// perkenalan();

// no2
// function perkenalan($nama, $salam){
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya " . $nama . " <br>";
//     echo "Senang berkenalan dengan Anda <br>";
// }

// // memanggil fungsi yang sudah dibuat
// perkenalan("Hamdana","Halo");

// echo "<hr>";

// $saya = "Erril";
// $ucapanSalam = "Selamat Pagi";

// // memanggil lagi
// perkenalan($saya, $ucapanSalam);


// no3
// function perkenalan($nama, $salam="Assalamualaikum"){
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya " . $nama . " <br>";
//     echo "Senang berkenalan dengan Anda <br>";
// }

// // memanggil fungsi yang sudah dibuat
// perkenalan("Hamdana","Halo");

// echo "<hr>";

// $saya = "Erril";
// $ucapanSalam = "Selamat Pagi";

// // memanggil lagi
// perkenalan($saya);

// no4
// membuat fungsi
function hitungMundur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur saya adalah ". hitungMundur(2005, 2024) . "tahun";
?>