<!DOCTYPE html>
<html>
<head>
    <title>Unggag File Dokumen</title>e
</head>

<body>
    <form action="upload_ajax.php" id="upload-form" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <input type="submit" name="submit" value="Unggah">
    </form>

    <div id="status"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="upload.js"></script>
</body>
</html>