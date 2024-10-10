<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors =array();

    // validasi nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi";
    }

    if (empty($email)) {
        $errors[] = "Email harus diisi";
    }elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email tidak valid";
    }

    if (strlen($password) < 8) {
        echo "Password harus lebih dari 8 karakter";
        exit;
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }else{
        echo "Data berhasil dikirim: nama = $nama, email = $email";
    }
}