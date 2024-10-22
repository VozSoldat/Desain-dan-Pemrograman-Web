<?php 

$pelangganNewsletter['nama'] = [];
$pelangganNewsletter['email'] = [];
$pelangganNewsletter = [
    "nama"=>[],
    "email"=>[],
];

if (isset($_POST)) {
    // echo "Terima kasih, anda telah mendaftar";

    array_push($pelangganNewsletter['nama'], $_POST['nama']);
    $pelangganNewsletter['nama'] = array_unique($pelangganNewsletter['nama']);

    $_POST['email'] = strtolower($_POST['email']);
    array_push($pelangganNewsletter['email'], $_POST['email']);
    $pelangganNewsletter['email'] = array_unique($pelangganNewsletter['email']); // menghapus email duplikat

    echo "<br>Terima kasih, anda telah mendaftar";
    echo"<br>{$pelangganNewsletter['email'][0]}<br>{$pelangganNewsletter['nama'][0]} <br>";

    
}

?>

<html>
    <body>
        <a href="./index.html">Kembali ke Halaman Utama</a>
    </body>
</html>