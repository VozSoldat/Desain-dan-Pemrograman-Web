<?php 
if (isset($_FILES['file'])) {
    $errors = [];
    $extensions = ['jpg', 'gif', 'png'];
    foreach ($_FILES['file']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['file']['name'][$key];
        $file_size = $_FILES['file']['size'][$key];
        $file_tmp = $_FILES['file']['tmp_name'][$key];
        $file_type = $_FILES['file']['type'][$key];
        @$file_ext = strtolower(end(explode('.', $_FILES['file']['name'][$key])));
        
        if (!in_array($file_ext, $extensions)) {
            $errors[] = "$file_name: Ekstensi file yang diizinkan adalah JPG, GIF, PNG";
        }

        if ($file_size > 2097152) {
            $errors[] = "$file_name: Ukuran file tidak boleh lebih dari 2 MB";
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, 'documents/'.$file_name);
            echo "$file_name berhasil diunggah<br>";
        }
    }

    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
}
