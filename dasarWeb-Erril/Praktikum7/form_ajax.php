<!DOCTYPE html>
<html>

<head>
    <title>Form Input PHP dan jQuery</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h2>Form Contoh</h2>
    <form action="proses_lanjut.php" method="post">
        <label for="buah">Pilih buah: </label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>

        <br>

        <label>Pilih Warna Favorit: </label><br>
        <input type="checkbox" name="warna[]" value="merah">Merah <br>
        <input type="checkbox" name="warna[]" value="biru">Biru <br>
        <input type="checkbox" name="warna[]" value="hijau">Hijau <br>

        <br>

        <label>Pilih Jenis Kelami:</label>
        <input type="radio" name="jk" value="laki-laki">Laki-laki
        <input type="radio" name="jk" value="perempuan">Perempuan

        <br>

        <input type="submit" value="submit">
    </form>

    <div id="hasil">
        <!-- TODO: hasil akan ditampilkan di sini -->
    </div>

    <script>
        $(document).ready(function() {
            e.preventDefault(); // mencegah pengiriman form secara default

            // mengumpulkan data from
            var formData = $("#myForm").serialize();

            // kirim data ke server PHP
            $.ajax({
                url: "proses_lanjut.php",
                type: "POST",
                data: formData,
                success: function(response) {
                    $("#result").html(response);
                }
            })
        })
    </script>
</body>

</html>