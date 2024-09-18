<?php 
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
}elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
}elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
}elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
    
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer";

echo "<br><br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$tanamanPerTaman = 10;
$jumlahBuah = 0;

for ($i=1; $i <= $jumlahLahan ; $i++) { 
    $jumlahBuah += ($tanamanPerLahan * $tanamanPerTaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus)<br>";
        continue;
    }else echo "Nilai: $nilai (Lulus)<br>";
}

echo "<br><br>";

// tugas soal no4.6
echo "Tugas soal no4.6<br>";

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$n = count($nilaiSiswa);
$temp; $isSwapped;

for($i = 0; $i < $n-1; $i++) {
    $isSwapped = False;

    for($j = 0; $j < $n-$i-1; $j++) {
        if($nilaiSiswa[$j] > $nilaiSiswa[$j+1]) {

            $temp = $nilaiSiswa[$j];
            $nilaiSiswa[$j] = $nilaiSiswa[$j+1];
            $nilaiSiswa[$j+1] = $temp;
            $isSwapped = True;
        }
    }

    if(!$isSwapped) {
        break;
    }
}

echo "Setelah sorted <br>";
for ($i=0; $i < count($nilaiSiswa); $i++) { 
    echo "Nilai: $nilaiSiswa[$i]<br>";
}

// larang ikut serta nilai dua tertinggi dan dua terendah
// dan hitung rata-rata
$jumlahNilai=0; $jumlahSiswaYangDihitung=0;
for ($i=0; $i < count($nilaiSiswa); $i++) { 
    if ($i >= 2 OR $i < count($nilaiSiswa)-2) {
        $jumlahNilai += $nilaiSiswa[$i];
        $jumlahSiswaYangDihitung++;
    }
}

$rataRata = $jumlahNilai / $jumlahSiswaYangDihitung;
echo "Rata-rata: ".$rataRata."<br>";

echo "<br><br>";

// tugas soal no4.7
echo "Tugas soal no4.7<br>";

$jumlahHargaCustomer = 120000;
$totalSetelahDiskon;
$diskon = 0.2;
if ($jumlahHargaCustomer >= 100000) {
    $totalSetelahDiskon = $jumlahHargaCustomer - ($diskon * $jumlahHargaCustomer);
}

echo "Total sebelum diskon: ".$jumlahHargaCustomer . "<br>";
echo "Total setelah diskon: ".$totalSetelahDiskon . "<br>";


?>