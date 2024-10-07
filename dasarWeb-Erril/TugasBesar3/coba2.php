<?php 

echo "<h1>Data Siswa</h1>";

$data = [
    "nama"=>["dina", "dino", "doni", "dadang", "dudung"],
    "umur"=>[20, 21, 22, 23, 24],
    "kelas"=>[1, 2, 3, 4, 5],
    "alamat"=>["jl. dina", "jl. dino", "jl. doni", "jl. dadang", "jl. dudung"]
];

echo "<table width=100%>";
echo "<thead><><tr><td>
<strong>NAMA</strong>
</td><td>
<strong>UMUR</strong>
</td><td>
<strong>KELAS</strong>
</td><td>
<strong>ALAMAT</strong>
</td></tr></thead>";
for ($i=0; $i < 5; $i++) {
    echo "<tr>";
    echo "<td>" . $data["nama"][$i] . "</td>";
    echo "<td>" . $data["umur"][$i] . "</td>";
    echo "<td>" . $data["kelas"][$i] . "</td>";
    echo "<td>" . $data["alamat"][$i] . "</td>";
    echo "</tr>";
    echo "<br>";
}


for ($i=0; $i < count($data["umur"]); $i++) {
    $total = 0;
    $total += $data["umur"][$i];
}

$rata = $total / count($data["umur"]);

echo "<h2>Rata-rata umur : " . $rata . "</h1>";


?>