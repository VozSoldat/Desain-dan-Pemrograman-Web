<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <style>
            body{
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            .table {
                border-collapse: collapse;


            }
            .table_head{
                background-color: cyan;
                font-weight: bold;
            }
        </style>
    </head>

    <body>
        <?php 
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];

        echo "Nama : {$Dosen ['nama']} <br>";
        echo "Domisili : {$Dosen ['domisili']} <br>";
        echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']} <br>";

        ?>

        <table border="1" class="table">
            <thead class="table_head">
                <td>
                    nama
                </td>
                <td>
                    domisili
                </td>
                <td>
                    jenis Kelamin
                </td>
            </thead>

            <?php 
            echo "<tr>";
            foreach ($Dosen as $key => $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
            ?>
        </table>
    </body>

</html>