<?php
if (isset($_POST['submit'])) {
    $targetdir = "uploads/"; // direktori tujuan untuk menyimpan file
    $targetfile = $targetdir . basename($_FILES['myfile']['name']);

    if (move_uploaded_file($_FILES['myfiles']['tmp_name'], $targetfile)) {
        echo "File berhasil diunggah";
    } else {
        echo "File gagal diunggah";
    }
}
