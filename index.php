<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
    <link
      href="css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body style="background-color: #F93827;">
    <nav class="navbar navbar-expand-lg bg-warning">
      <div class="container">
        <a class="navbar-brand" href="index.php">Sari Rasa</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#about"
                >About Us</a
              >
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" aria-current="page" href="#"  role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false">Tentang Kami</a
              >
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#tim_kami">Tim (Founder)</a></li>
                <li><a class="dropdown-item" href="#testimoni">Testimoni</a></li>
              </ul>
            </li>
          </ul>
          <img
            src="img/WhatsApp Image 2024-12-18 at 22.01.46.jpeg"alt="" style="width: 50px; height: auto; border-radius: 50%"/>
          <!-- <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> -->
        </div>
      </div>
    </nav>

    <div class="container px-4 text-center mt-5">
      <div class="row gx-5 bg-blue">
        <div class="col">
          <div class="p-3 border bg-light">
            <a href="nasi.php">
              <img src="img/images.png" alt="" />
            </a>
          </div>
        </div>
        <div class="col">
          <div class="p-3 border bg-light">
            <a href="ayam.php">
              <img src="img/ayam.jpg"style="width: 350px; height: auto" alt=""/>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="p-3 border bg-light">
            <a href="ikan.php">
              <img src="img/ikan.jpg"style="width: 300px; height: auto" alt=""/>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-2 mt-5" id="about">
            <h2 class="centered-text mb-3">
                <span class="orange-underline">
                    <h1 class="text-center">About Us</h1>
                </span>
            </h2>
            <section class="py-5">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-xl-2 justify-content-center">
                    <div class="col mb-4"> <!-- Tambahkan class col dan mb-4 untuk memberikan jarak samping dan atas-bawah -->
                        <div class="card border-dark h-100"> <!-- Tambahkan class h-100 untuk mengatur tinggi kartu -->
                            <div class="card-body text-center"> <!-- Tambahkan class text-center untuk konten dalam kartu -->
                                <h5 class="card-title">Cerita Kami</h5>
                                <p class="card-text">Sari Rasa ialah sebuah toko makanan yang didirikan oleh Pak Rudi, seorang pria yang sejak kecil belajar memasak bersama ibunya. Toko kecil ini awalnya hanya menjual nasi dengan lauk ayam goreng dan ikan bakar, namun seiring waktu, berkat cita rasa autentik dan bahan-bahan segar, 
                                  Sari Rasa menjadi favorit di kawasan ini. Menu andalan seperti nasi goreng spesial, ayam penyet, dan ikan bakar selalu memikat pelanggan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4"> <!-- Tambahkan class col dan mb-4 untuk memberikan jarak samping dan atas-bawah -->
                        <div class="card border-dark h-100"> <!-- Tambahkan class h-100 untuk mengatur tinggi kartu -->
                            <div class="card-body text-center"> <!-- Tambahkan class text-center untuk konten dalam kartu -->
                                <h5 class="card-title">Bergabunglah Dengan Kami</h5>
                                <p class="card-text">Setiap hidangan dibuat dengan resep turun-temurun yang menjamin rasa otentik dan nikmat. 
                                  Dengan harga terjangkau dan porsi mengenyangkan, Sari Rasa adalah pilihan tepat untuk makan enak tanpa menguras kantong.
                                  Selain makanan, pelayanan ramah dari Pak Rudi dan Bu Siti menciptakan suasana yang nyaman dan hangat, membuat pelanggan merasa seperti di rumah. 
                                  Nikmati juga berbagai promo menarik dan pengalaman kuliner yang tak terlupakan bersama keluarga atau teman di Sari Rasa!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
        <div class="container mb-4 mt-5" id="tim_kami">
          <div class="row">
            <h2 class="centered-text mb-3">
                <span class="orange-underline">
                    <h1 class="text-center">Founders</h1>
                </span>
            </h2>
            <!-- Card 1 -->
            <div class="col mb-4">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="img/faizal.png" class="card-img" alt="Gambar Anda" style="width: 100%; height: auto;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Muhamad Faizal Fikri</h5>
                                <h6 class="card-title" style="text-align: center;">Leader</h6>
                                <p class="card-text">"Jadilah baik untuk menjadi terbaik."</p>
                                <div class="social-media">
                                    <a href="https://www.instagram.com/m.f.f._zal/">
                                      <img src="img/logoig.png" alt="Instagram" class="mr-2" style="width: 30px; height: 30px;">
                                    </a>
                                    <a href="https://www.linkedin.com/in/muhamad-faizal-fikri-576593311/">
                                      <img src="img/linkedin.png" alt="E-mail" class="mr-2" style="width: 30px; height: 30px;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      
            <!-- Card 2 -->
            <div class="col mb-4">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="img/iqbal.jpeg" class="card-img" alt="Gambar Anda" style="width: 100%; height: auto;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Iqbal Hermawan</h5>
                                <h6 class="card-title" style="text-align: center;">Anggota</h6>
                                <p class="card-text">"Terlalu sibuk kegiatan luar biasa"</p>
                                <div class="social-media">
                                  <a href="https://www.instagram.com/balher25/">
                                    <img src="img/logoig.png" alt="Instagram" class="mr-2" style="width: 30px; height: 30px;">
                                  </a>
                                  <a href="#">
                                    <img src="img/linkedin.png" alt="E-mail" class="mr-2" style="width: 30px; height: 30px;">
                                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col mb-4">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="img/WhatsApp Image 2025-01-06 at 22.07.18.jpeg" class="card-img" alt="Gambar Anda" style="width: 100%; height: auto;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Meila Ayu Zahara</h5>
                                <h6 class="card-title" style="text-align: center;">Anggota</h6>
                                <p class="card-text">"Life goes on. do it, evaluate it, improve it."</p>
                                <div class="social-media">
                                  <a href="https://www.instagram.com/la_la.updates/">
                                    <img src="img/logoig.png" alt="Instagram" class="mr-2" style="width: 30px; height: 30px;">
                                  </a>
                                  <a href="https://www.linkedin.com/in/meila-ayu-zahara-57b8052b9/">
                                    <img src="img/linkedin.png" alt="E-mail" class="mr-2" style="width: 30px; height: 30px;">
                                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="container mb-2 mt-5" id="testimoni">
    <h2 class="centered-text mb-3">
        <span class="orange-underline">
            <h1 class="text-center">Testimoni Pembeli</h1>
        </span>
    </h2>
    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="3"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card border-dark">
                    <div class="card-body text-center">
                        <img src="img/coba1.png" alt="Pembeli 1" class="rounded-circle mb-3" style="width: 100px; height: 100px;">
                        <h5 class="card-title">Anderson Ali Muhamad</h5>
                        <div class="text-warning mb-2">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <p class="card-text">"Nasi Bakar spesialnya enak banget! Bumbunya meresap dan porsinya pas. Pelayanannya juga ramah. Pasti bakal jadi langganan nih!"</p>
                    </div>
                </div>
            </div>
            
            <div class="carousel-item">
                <div class="card border-dark">
                    <div class="card-body text-center">
                        <img src="img/coba2.jpg" alt="Pembeli 2" class="rounded-circle mb-3" style="width: 100px; height: 100px;">
                        <h5 class="card-title">Ahmad Rizki</h5>
                        <div class="text-warning mb-2">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <p class="card-text">"Ayam Geprek di sini juara! Sambalnya pedas pas dan ayamnya empuk. Harganya juga terjangkau untuk rasanya yang enak. Recommended!"</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded"></span>
        </button>
    </div>
</div>
<footer class="bg-dark text-white text-center py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <?php include_once "footer.php"; ?>
            </div>
        </div>
    </div>
</footer>
    <script
      src="js/bootstrap.bundle.min.js">
    </script>
  </body>
</html>
