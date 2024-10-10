<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP</title>
</head>
<body>
<h2>
    Form Contoh
</h2>

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
</body>
</html>