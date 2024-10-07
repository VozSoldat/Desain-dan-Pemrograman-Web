<?php 
echo "<h1>Data Mahasiswa array multidimensi</h1>";

$data = [
    "nama"=>["dina", "dino", "doni", "dadang", "dudung"],
    "nim"=>["123", "124", "125", "126", "127"],
    "prodi"=>["teknik informatika", "teknik komputer", "teknik sipil", "teknik industri", "teknik elektro"],
    "email"=>["123@student.polinema.ac.id", "124@student.polinema.ac.id", "125@student.polinema.ac.id", "126@student.polinema.ac.id", "127@student.polinema.ac.id"],
];

for ($i=0; $i < 5; $i++) {
    echo "NAMA : " . $data["nama"][$i] . "<br>";
    echo "NIM : " . $data["nim"][$i] . "<br>";
    echo "PRODI : " . $data["prodi"][$i] . "<br>";
    echo "EMAIL : " . $data["email"][$i] . "<br>";
    echo "<br>";
}

?>