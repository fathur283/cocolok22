<?php 
  include 'koneksi.php';
  include 'save_pesanan.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SmartPlug - Pemesanan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/atas.jpg" rel="icon">
  <link href="../assets/img/atas.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Template Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="../index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>SmartPlug</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../index.php #hero" >Home</a></li>
          <li><a href="../index.php #about" >About</a></li>
          <li><a href="../index.php #pricing" >Pricing</a></li>
          <li><a href="../index.php #testimonials" >Review</a></li>
          <li><a href="get-a-quote.php" >Buy Now</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('../assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Smart Choice For The Smart Life</h2>
              <p>Smart plug merupakan alat listrik konvensional yang dapat dihubungkan ke socket listrik yang ada dirumah kita, fungsi dari smart plug ini untuk menyambungkan dan memutus aliran listrik barang elektronik yang terhubung ke smart plug dari jarak yang jauh.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Buy Now</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Get a Quote Section ======= -->
    <section id="get-a-quote" class="get-a-quote">
      <div class="container" data-aos="fade-up">

        <div class="row g-0">

          <div class="col-lg-5 quote-bg" style="background-image: url(../assets/img/quote-bg.jpg);"></div>

          <div class="col-lg-7">
            <form action="save_pesanan.php" method="post" class="php-email-form">
              <h3>Alamat</h3>
              <p>Silahkan untuk mengisi alamat lengkap untuk pengiriman.</p>
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="provinsi" class="form-control" placeholder="Provinsi" required>
                </div>

                <div class="col-md-6">
                  <input type="text" name="kota" class="form-control" placeholder="Kota/Kabupaten" required>
                </div>

                <div class="col-md-6">
                  <input type="text" name="kelurahan" class="form-control" placeholder="Kelurahan/Desa" required>
                </div>

                <div class="col-md-6">
                  <input type="text" name="alamat" class="form-control" placeholder="Alamat lengkap" required>
                </div>

                <div class="col-lg-12">
                  <br>
                  <h3>Masukan data diri anda</h3>
                  <p>Silahkan isi data diri anda untuk alamat pengiriman.</p>
                </div>

                <div class="col-md-12">
                  <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                </div>

                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="no_hp" placeholder="Nomor telefon" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="pesan" rows="6" placeholder="Pesan tambahan" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                  <button type="submit" name="kirim">Kirim</button>
                </div>
                
                <!-- <div class="col-md-12 text-center">
                  <button type="submit" name="kirim">kirim</button>
                </div> -->
              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get a Quote Section -->

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
            <li><a href="../index.php#index">Home</a></li>
            <li><a href="../index.php#about">About us</a></li>
            <li><a href="../index.php#pricing">Pricing</a></li>
            <li><a href="../index.php#review">Review Customer</a></li>
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
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

  <?php

    if (isset($_SESSION['status']) && $_SESSION['status'] != '') 
    {
      
  ?>
      <script>
        swal({
          title: "<?php echo $_SESSION['status']; ?>",
          icon: "<?php echo $_SESSION['status_code']; ?>",
          button: "OK",
        });
      </script>

    <?php
      unset($_SESSION['status']);
    }
?>



</body>

</html>