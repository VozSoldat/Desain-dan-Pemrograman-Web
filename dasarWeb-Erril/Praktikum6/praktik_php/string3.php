<?php 
$pesan = "Saya arek malang";
echo strrev($pesan) . "<br>";


$pesan = "saya arek malang";
# ubah variabel $pesan menjadi aray dengan perintah explode
$pesanPerKata = explode(" ", $pesan);
# ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($pesan)=>strrev($pesan), $pesanPerKata);
# gabungkan array menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";

?>