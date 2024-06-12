<?php include 'sub/koneksi.php'; ?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SmartPlug - Smart IoT device</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/atas.jpg" rel="icon">
  <link href="assets/img/atas.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>SmartPlug</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero" >Home</a></li>
          <li><a href="#about" >About</a></li>
          <li><a href="#pricing" >Pricing</a></li>
          <li><a href="#testimonials" >Review</a></li>
          <li><a href="sub/get-a-quote.php" >Buy Now</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Smart Choice For The Smart Life</h2>
          <p data-aos="fade-up" data-aos-delay="100">Smart plug merupakan alat listrik konvensional yang dapat dihubungkan ke socket listrik yang ada dirumah kita, fungsi dari smart plug ini untuk menyambungkan dan memutus aliran listrik barang elektronik yang terhubung ke smart plug dari jarak yang jauh.</p>
          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">
            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
                <p>Clients</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
                <p>Support</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
                <p>Workers</p>
              </div>
            </div><!-- End Stats Item -->

          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <br><br><br>
            <img src="assets/img/about.png" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=YguWOepJqn4" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <br>
            <h3>About Us</h3>
            <p>
              Smart plug merupakan sebuah perangkat pintar yang dapat dikendalikan dari jarak jauh, Produk ini diciptakan oleh 3 Siswa yang berasal dari Sekolah SMKN 1 Cimahi.
              Produk ini terinspirasi dari kebiasan - kebiasaan yang dilakukan oleh seluruh kalangan yang merasa malas untuk mematikan alat elektronik yang tidak terpakai.
            </p>
            <ul>
              <br>
              <h5><center>FEATURES PRODUCT</center></h5>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>Connects Your Appliance to Internet</h5>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-check"></i>
                <div>
                  <h5>Easy Control via Telegram</h5>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Things Smart Interaction</h5>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-quote"></i>
                <div>
                  <h5>Slim Design with 2 socket</h5>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- Product section-->
    <?php
      $query = mysqli_query($koneksi_data,"SELECT * FROM barang");
      $row_query = mysqli_fetch_array($query);
    ?>

    <section class="py-5" id="pricing">
      <div class="container px-4 px-lg-5 my-5">
          <div class="row gx-4 gx-lg-5 align-items-center">
              <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="assets/img/Foto Produk.png" alt="..." /></div>
              <div class="col-md-6">
                  <div class="small mb-1"></div>
                  <h1 class="display-5 fw-bolder">Get Your Smart Plug</h1>
                  <div class="fs-5 mb-5">
                      <span class="text-decoration-line-through">Rp.250.000,00</span>
                      <span>Rp.200.000,00</span>
                      <br>
                      <span>stok : <?php echo $row_query['stok']?></span>
                  </div>
                  
                  <p class="lead">Inside the box, you can get : Smart Plug device, Manual Book, USB Cable, and Free Sticker.</p>
                  <div class="d-flex">
                      <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                      <button class="btn btn-outline-dark flex-shrink-0" type="button" href="get-a-quote.html">
                          <i class="bi-cart-fill me-1"><a href="sub/get-a-quote.php">Buy Now</a></i>
                          
                      </button>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <!-- End Pricing Item -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="slides-1 swiper" data-aos="fade-up">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/fauzan-testimonials.jpeg" class="testimonial-img" alt="">
                <h3>Fauzan Amirul</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Saya sangat tertarik dengan produk SmartPlug ini, karena terdapat banyak potensi untuk dikembangkan dengan berbagai fitur lainnya.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/galih-testimonials.jpeg" class="testimonial-img" alt="">
                <h3>Febrian Galih</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Desain dari produk ini terbilang cukup simple namun elegan dengan ciri khas nya tersendiri.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/dyas-testimonials.jpeg" class="testimonial-img" alt="">
                <h3>Zihan Dyas</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Saya mengakui bahwa fungsi dan manfaat yang didapat sesuai dengan harga yang ditawarkan
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/den-testimonials.jpeg" class="testimonial-img" alt="">
                <h3>Aji Den</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Saya sangat puas dengan manfaat dari produk ini, hidup saya jadi sangat terbantu dengan adanya produk ini dirumah.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/edwin-testimonials.jpeg" class="testimonial-img" alt="">
                <h3>Devan Edwin</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Menurut pandangan pribadi saya, SmartPlug merupakan sebuah terobosan baru pada industri Smart Home saat ini, saya yakin di masa yang akan datang SmartPlug akan menjadi Market Leadership.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Cocolok</span>
          </a>
          <p>Terimakasih kepada seluruh user yang sudah mengunjungi website kami, jangan lupa untuk checkout Cocolok (Smartplug) yaaaaa!!!</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://wa.me/+62082130394490" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
            <a href="https://www.instagram.com/smartplug_pastikece/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#index">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#pricing">Pricing</a></li>
            <li><a href="#review">Review Customer</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-right text-md-start">
          <h4>Contact Us</h4>
          <p>
            Jl. Mahar Martanegara No.48, <br>
            Utama, Kec. Cimahi Selatan, Kota Cimahi, Jawa Barat, Indonesia<br>
            <br>
            <strong>Phone :</strong> +62 82130394490<br>
            <strong>Email :</strong> cocolok250@gmail.com<br>
            <strong>instagram :</strong> @smartplug_pastikece<br>
          </p>
        </div>
      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Kelompok 4</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by Fathur, Ilham, Dan Abdul
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  

</body>

</html>