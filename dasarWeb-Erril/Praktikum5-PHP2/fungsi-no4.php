<?php 
// no4
// membuat fungsi
function hitungMundur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur saya adalah ". hitungMundur(2005, 2024) . "tahun";

?>