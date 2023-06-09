<!DOCTYPE html>
<html>
<head>

    <title>Lambs</title>
    <meta charset="UTF-8">
    <meta name="description" content="HTML sivupohja">
    <meta name="author" content="">
    <meta name="keywords" content="lambs, tornio, hevi, rock, metal, lampaat, guns n ammo, disappointment way of life, doing it, heart of stone">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="koodit/css/tyylit.css">
    
    <!-- Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">    
</head>

<body>
    <header>
        <a href="#"><img width="400px" src="img/logo.jpg" alt="lambs"></a>
        <nav>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="keikkakalenteri.html">Gigs</a></li>
            <li><a href="uutiset.html">News</a></li>
            <li><a href="media.php">Media</a></li>
            <li><a href="historia.html">History</a></li>
            <li><a href="https://www.facebook.com/lambsrnr/">Contact</a></li>
            <li><a href="https://www.facebook.com/lambsrnr/"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://open.spotify.com/artist/5J3AcDsarvqsLXoIOdc80i?go=1&sp_cid=99263ed66ce7023966c77560bd58a3b1&utm_source=embed_player_p&utm_medium=desktop&nd=1"><i class="fab fa-spotify"></i></a></li>
            <li><a href="https://www.youtube.com/playlist?list=PL437A552EBAAB6DA8"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </nav>
    <div class="row">
      </header>
      <section class="hero">
        <h1>Material from the gigs</h1>
       
        <!-- <iframe src="https://www.facebook.com/plugins/page.php?href=https://www.facebook.com/lambsrnr&tabs=timeline&width=500&height=300&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> -->
      </section> </div>


      <div class="row">
  <div class="col-xl-12">
    <div class="kuvat" id="images">
      <?php
      $target_dir = "backend/kuvat/";
      $valid_extensions = array("jpg", "jpeg", "png", "gif");

      $files = glob($target_dir . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
      foreach ($files as $file) {
        $filename = basename($file);
        $imageFileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($imageFileType, $valid_extensions)) {
          echo "<a href='$target_dir$filename'><img src='$target_dir$filename' width='200' height='200'></a>";
        }
      }
      ?>
    </div>
  </div>
</div>
 
      

    <section class="iframe-section">
  <div class="row">
    <div class="col-xl-1"></div>
    <div class="col-xl-1"></div>
    <div class="col-xl-4">
      <p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PL437A552EBAAB6DA8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </p>
    </div>
    <div class="col-xl-4">
      <p>
        <iframe style="border-radius: 12px" src="https://open.spotify.com/embed/artist/5J3AcDsarvqsLXoIOdc80i?utm_source=generator" width="560" height="352" frameborder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
      </p>
    </div>
    <div class="col-xl-1"></div>
    <div class="col-xl-1"></div>
  </div>
</section>

<footer class="footer text-white">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p class="m-0">&copy; 2023 My Website. All rights reserved.</p>
            </div>
            <div class="col-sm-6">
              <ul class="list-inline text-sm-end mb-0">
                <li class="list-inline-item"><a href="index.html" >Home</a></li>
                <li class="list-inline-item me-4"><a href="media.php" >Media</a></li>
                <li><a href="https://www.facebook.com/lambsrnr/"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://www.youtube.com/playlist?list=PL437A552EBAAB6DA8"><i class="fab fa-youtube"></i></a></li>
                <li><a href="https://open.spotify.com/artist/5J3AcDsarvqsLXoIOdc80i?go=1&sp_cid=99263ed66ce7023966c77560bd58a3b1&utm_source=embed_player_p&utm_medium=desktop&nd=1"><i class="fab fa-spotify"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
</body>
</html>
