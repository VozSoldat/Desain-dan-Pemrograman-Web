<?php 
// lokasi file yang diunggah
$targetDirectory = "documents/";

// periksa apakah direktori ada
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);

    // loop melalui semua file
    for ($i=0; $i < $totalFiles; $i++) { 
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;

        // pindahlan file ke direktori tujuan
        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
            echo "File $fileName berhasil diunggah.<br>";
        }else{
            echo "Gagal mengunggah file $fileName.<br>";
        }
    }
}else{
    echo "Tidak ada file yang diunggah.";
}

?>