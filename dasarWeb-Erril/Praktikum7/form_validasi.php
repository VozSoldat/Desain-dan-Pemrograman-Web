<!DOCTYPE html>
<html>

<head>
    <title>Form Input PHP</title>
</head>

<body>
    <h1>Form Input dengan Validasi</h1>
    <form action="proses_validasi.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>\
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault();  // Mencegah form dari reload

                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;

                // Validasi di sisi klien
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                if (email === "") {
                    $("#email-error").text("Email harus diisi");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (valid) {
                    // Mengirim data menggunakan AJAX
                    $.ajax({
                        url: "proses_validasi.php",
                        type: "POST",
                        data: { nama: nama, email: email },
                        success: function(response) {
                            alert("Respons dari server: " + response);
                        },
                        error: function(xhr, status, error) {
                            alert("Terjadi kesalahan: " + error);
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>