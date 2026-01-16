<?php
//menyertakan code dari file koneksi
include "koneksi.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comfortcorner</title>
    <link rel="icon" type="image/png" href="img/logo.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <!-- Nav begin -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">My Comfort Corner</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="d-flex gap-2 ms-auto order-lg-last">
            <button id="darkBtn" class="btn btn-dark"><i class="bi bi-moon"></i></button>
            <button id="lightBtn" class="btn btn-primary bg-primary-subtle text-dark"><i class="bi bi-sun"></i></button>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#article">Article</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php" target="_blank">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- Nav End -->

    <!-- hero begin -->
     <section id="hero" class="text-center p-5 bg-primary-subtle text-sm-start">
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                <img src="img/photo-1630910627747-299d3bc50b4d.avif" class="img-fluid"  width="300">
                <div>
                    <h1 class="fw-bold display-4">
                        Here, it's all about the cozy feeling
                    </h1>
                    <h4 class="lead display-5">
                        Tentang diriku, hobi, dan hal-hal yang bikin happy.
                    </h4>
                    <span id="tanggal"></span>
                    <span id="jam"></span>
                </div>
            </div>
        </div>
     </section>
    <!-- hero end -->

    <!-- articel begin -->
     <section id="article" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">article</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            <?php
            $sql = "SELECT * FROM articel ORDER BY tanggal DESC";
            $hasil = $conn->query($sql); 

            while($row= $hasil->fetch_assoc()){
            ?>
            <!--col begin-->
                <div class="col">
                  <div class="card h-100">
                    <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?= $row["judul"]?></h5>
                      <p class="card-text">
                        <?= $row["isi"]?>
                    </p>
                    </div>
                    <div class="card-footer">
                      <small class="text-body-secondary"><?= $row["tanggal"]?>
                    </small>
                    </div>
                  </div>
                </div>
            <!--col end-->
            <?php
            }
            ?>
          </div>
        </div>
     </section>
    <!-- articel end -->

    <!-- gallery begin -->
     <section id="gallery" class="text-center p-5 bg-primary-subtle">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/galery.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/galery1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/galery2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/galery3.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/galery4.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
     </section>
    <!-- gallery end -->
    
    <!-- footer begin -->
     <footer class="text-center p-5">
        <div>
           <a href="https://www.instagram.com/zx.skia?igsh=OHU0czRqeHM4czh4"><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
           <a href="https://www.tiktok.com/@kiaxia_xx?_t=ZS-90viVTcoEWe&_r=1"><i class="bi bi-tiktok h2 p-2 text-dark"></i></a>
           <a href="https://wa.me/+6288226797310"><i class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
        </div>
        <div>
            Zaskia Lu'lu' Ilma &copy; 2025
        </div>
     </footer>
    <!-- footer end -->

    <!--Tombol Back to Top-->
      <button
        id="backToTop"
        class="btn btn-primary rounded-circle position-fixed bottom-0 end-0 m-3 d-none"
      >
        <i class="bi bi-arrow-up" title="Back to Top"></i>
      </button>

    <!--dark dan light mode-->  
      <script>
        const darkBtn = document.getElementById("darkBtn");
        const lightBtn = document.getElementById("lightBtn");
        const navbar = document.querySelector("nav.navbar");
        const hero = document.getElementById("hero");
        const article = document.getElementById("article");
        const gallery = document.getElementById("gallery");
        const footer = document.querySelector("footer");
        const cards = document.querySelectorAll(".card");
        const accordions = document.querySelectorAll(".accordion-item");
        const accButtons = document.querySelectorAll(".accordion-button");
        const footerIcons = document.querySelectorAll("footer .bi");
        const backToTopBtn = document.getElementById("backToTop");

        function cleanBgTextClasses(el) {
          el.classList.remove(
            "bg-primary", "bg-primary-subtle", "bg-white", "bg-dark", "bg-secondary", "bg-black", "bg-body-tertiary",
            "text-light", "text-dark"
          );
        }
      
        function setTheme(isDark) {
          if (isDark) {
            document.body.classList.add("bg-black", "text-light");
            document.body.classList.remove("bg-white", "text-dark");
      
            cleanBgTextClasses(hero);
            hero.classList.add("bg-secondary", "text-light");
      
            cleanBgTextClasses(article);
            article.classList.add("bg-dark", "text-light");

            cleanBgTextClasses(gallery);
            gallery.classList.add("bg-secondary", "text-light");

            cleanBgTextClasses(footer);
            footer.classList.add("bg-black", "text-light");
      
            cards.forEach(card => {
              cleanBgTextClasses(card);
              card.classList.add("bg-secondary", "text-light");
            });
      
            accordions.forEach(acc => {
              cleanBgTextClasses(acc);
              acc.classList.add("bg-dark", "text-light");
            });
      
            accButtons.forEach(btn => {
              cleanBgTextClasses(btn);
              btn.classList.add("bg-secondary", "text-light");
            });

            footerIcons.forEach(icon => {
              icon.classList.remove("text-dark");
              icon.classList.add("text-light");
            });

            backToTopBtn.classList.remove("btn-primary");
            backToTopBtn.classList.add("btn-light"); 

            scheduleIcons.forEach(icon => {
            icon.classList.remove("text-primary");
            icon.classList.add("text-light");
            });

            localStorage.setItem("theme", "dark");

          } else {
            document.body.classList.remove("bg-black", "text-light");
            document.body.classList.add("bg-white", "text-dark");
      
            cleanBgTextClasses(hero);
            hero.classList.add("bg-primary-subtle", "text-dark");
      
            cleanBgTextClasses(article);
            article.classList.add("bg-white", "text-dark");
    
            cleanBgTextClasses(gallery);
            gallery.classList.add("bg-primary-subtle", "text-dark");
      
            cleanBgTextClasses(footer);
            footer.classList.remove("bg-black", "text-light");
            footer.classList.add("text-dark");
      
            cards.forEach(card => {
              cleanBgTextClasses(card);
              card.classList.add("bg-white", "text-dark");
            });
      
            accordions.forEach(acc => {
              cleanBgTextClasses(acc);
              acc.classList.add("bg-white", "text-dark");
            });
      
            accButtons.forEach(btn => {
              cleanBgTextClasses(btn);
              btn.classList.remove("bg-secondary", "text-light");
            });

            footerIcons.forEach(icon => {
              icon.classList.remove("text-light");
              icon.classList.add("text-dark");
            });

            backToTopBtn.classList.remove("btn-light");
            backToTopBtn.classList.add("btn-primary");;

            localStorage.setItem("theme", "light");
          }
        }
      
        darkBtn.addEventListener("click", () => setTheme(true));
        lightBtn.addEventListener("click", () => setTheme(false));
      
        const stored = localStorage.getItem("theme");
        if (stored === "dark") {
          setTheme(true);
        } else {
          setTheme(false);
        }
      </script>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script type="text/javascript">
    function tampilWaktu(){
      const waktu = new Date();

      const tanggal = waktu.getDate();
      const bulan = waktu.getMonth();
      const tahun = waktu.getFullYear();
      const jam = waktu.getHours();
      const menit = waktu.getMinutes();
      const detik = waktu.getSeconds();

      const arrBulan = ["1", "2", "3", "4","5","6","7","8","9","10","11","12"];

      const tanggal_full = tanggal + "/" + arrBulan[bulan] + "/" + tahun;
      const jam_full = jam + ":" + menit + ":" + detik;

      
      document.getElementById("tanggal").innerHTML = tanggal_full;
      document.getElementById("jam").innerHTML = jam_full;
    }

    setInterval(tampilWaktu, 1000);
    </script>
    <script type="text/javascript"> 
      const backToTop = document.getElementById("backToTop");
    
      window.addEventListener("scroll", function () {
        if (window.scrollY > 300) {
          backToTop.classList.remove("d-none");
          backToTop.classList.add("d-block");
        } else {
          backToTop.classList.remove("d-block");
          backToTop.classList.add("d-none");
        }
      });

      backToTop.addEventListener("click", function () {
        window.scrollTo({ top: 0, behavior: "smooth" });
      });
    </script>
  </body>
</html>