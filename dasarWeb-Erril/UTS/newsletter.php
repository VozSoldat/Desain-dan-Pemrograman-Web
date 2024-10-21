<?php 

$arrayNama = [];
$arrayEmail = [];
$pelangganNewsletter = [
    "nama"=>[],
    "email"=>[],
];

if (isset($_POST)) {
    echo "Terima kasih, anda telah mendaftar";

    array_push($arrayNama, $_POST['nama']);
    $arrayNama = array_unique($arrayNama);

    $_POST['email'] = strtolower($_POST['email']);
    array_push($arrayEmail, $_POST['email']);
    $arrayEmail = array_unique($arrayEmail); // menghapus email duplikat

    echo"{$arrayEmail[0]}{$arrayNama[0]} epoy";


}