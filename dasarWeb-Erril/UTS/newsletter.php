<?php 

$pelangganNewsletter['nama'] = [];
$pelangganNewsletter['email'] = [];
$pelangganNewsletter = [
    "nama"=>[],
    "email"=>[],
];

if (isset($_POST)) {
    // echo "Terima kasih, anda telah mendaftar";

    array_push($pelangganNewsletter['nama'], $_POST['nama']);
    $pelangganNewsletter['nama'] = array_unique($pelangganNewsletter['nama']);

    $_POST['email'] = strtolower($_POST['email']);
    array_push($pelangganNewsletter['email'], $_POST['email']);
    $pelangganNewsletter['email'] = array_unique($pelangganNewsletter['email']); // menghapus email duplikat

    // echo "<br>Terima kasih, anda telah mendaftar";
    // echo"<br>{$pelangganNewsletter['email'][0]}<br>{$pelangganNewsletter['nama'][0]} <br>";

    
}

?>

<html>
    <body>
        <!-- <a href="./index.html">Kembali ke Halaman Utama</a> -->
    </body>
</html>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Arowani</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://code.jquery.com/jquery-3.7.1.js"
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <header class="">
      <div class="bola"></div>
      <a
        href="/Desain-dan-Pemrograman-Web/dasarWeb-Erril/UTS/"
        class="logo"
        alt=""
      >
        <span></span>
        <h4>Arowani</h4>
      </a>
      <nav>
        <a class="about-us" href="./tentang.html"> Tentang </a>
        <a href="https://tokopedia.link/1ZI2t0f3RNb" target="_blank">
          Belanja
        </a>
      </nav>
    </header>
    <section id="tentang">
      <h1></h1>
      <p>
        <!-- Arowani adalah perusahaan budidaya ikan arwana atau siluk yang berbasis
        di Kubu Raya, Kalimantan Barat. -->
      </p>

      <?php 
      echo "<br>Terima kasih, anda telah mendaftar";
    echo"<br>{$pelangganNewsletter['email'][0]}<br>{$pelangganNewsletter['nama'][0]} <br>";
    
      
      ?>
      <a href="./index.html" id="kembali-ke-halaman-utama">Kembali ke Halaman Utama</a>
    </section>
    <!-- <span id="erril">
      <div>Developed by</div>
      <span>
        <img
          src="https://github.githubassets.com/assets/GitHub-Mark-ea2971cee799.png"
          alt="github-logo"
        />
        <a href="https://github.com/VozSoldat/" target="_blank"
          >Muhammad Erril Putra Pratidina</a
        >
      </span>
    </span> -->

    <footer>
      <div class="bola"></div>
      <p>© 2022 PT Arowani Pratidina. All rights reserved.</p>
    </footer>
  </body>
</html>