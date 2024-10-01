<!-- CARA PERTAMA -->
 <HTML>
    <head>
        <title>Cara 01</title>
    </head>
    <body>
        <p>
            Tanggal hari ini : <?php echo date("d M Y");?>
        </p>
    </body>
 </HTML>

<!-- CARA KEDUA -->
<?php 
echo "<HTML>";
    echo "<head>";
        echo "<title>Cara 02</title>";
    echo "</head>";
    echo "<body>";
        echo "<p>";
            echo "Tanggal hari ini : " . date("d M Y");
        echo "</p>";
    echo "</body>";
echo "</HTML>";
?>