<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Penerimaan Peserta Didik Baru (PPDB) Online</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .navbar {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: bold;
        }
    </style>
</head>


<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Pondok Pesantren Al Ghozali</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#ekstrakurikuler">Ekstrakurikuler</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#panduan">Panduan</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login.php">Masuk</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->

    <!-- Tambahkan di <head> -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Hero Section -->
    <header style="background: url('assets/img/portfolio/ponpes.png') center center / cover no-repeat; height: 100vh; position: relative;">
        <!-- Overlay gelap -->
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to right, rgba(0,0,0,0.85) 40%, rgba(0,0,0,0.2)); z-index:1;"></div>

        <div class="container h-100 position-relative" style="z-index:2;">
            <div class="row h-100 align-items-center flex-column-reverse flex-md-row justify-content-between text-center text-md-start">
                <!-- Kolom Kiri: Sambutan -->
                <div class="col-md-6 text-white px-md-5 text-md-start">
                    <img src="assets/img/favicon.ico" alt="Logo" class="img-fluid mb-3" style="max-width: 140px;">
                    <small class="text-success text-uppercase mb-3 d-block fw-semibold" style="letter-spacing: 1.5px;">
                        <i class="fas fa-mortar-board me-2"></i> PPDB Online 2025
                    </small>
                    <h1 class="display-5 fw-bold mb-2">Selamat Datang di</h1>
                    <h2 class="h4 mb-3 text-success fw-semibold" style="font-size: 2.25rem;">Pondok Pesantren Al Ghozali</h2>
                    <hr class="bg-light" style="width: 80px; height: 4px; opacity: 1;">
                    <p class="lead mb-4">Tempat pendidikan berbasis agama dan teknologi di Gunung Sindur - Bogor. Mulailah perjalanan pendidikan terbaik untuk anak Anda.</p>
                    <a href="login.php" class="btn btn-success btn-lg rounded-pill px-4 py-2 shadow-lg w-100 w-md-auto">
                        <i class="fas fa-edit me-2"></i> Daftar Sekarang
                    </a>
                </div>

                <!-- Kolom Kanan: Profil -->
                <div class="col-md-6 mt-5 mt-md-0 px-md-5 text-md-end">
                    <div class="p-4 shadow-lg rounded-4 text-white ms-md-auto" style="backdrop-filter: blur(15px); background: rgba(255, 255, 255, 0.15); border: 1px solid rgba(255,255,255,0.3);">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                                <i class="fas fa-school fa-2x text-success bg-white bg-opacity-25 p-3 rounded-circle"></i>
                            </div>
                            <h4 class="fw-bold mb-0">Profil Pesantren</h4>
                        </div>
                        <p class="mb-2" style="font-size: 1.05rem; line-height: 1.8;">
                            Pondok Modern Al-Ghozali didirikan pada <strong>11 Januari 1982</strong> oleh Yayasan Pendidikan Islam Al-Ghozali dengan akta notaris No. 10 tahun 1982.
                        </p>
                        <p style="font-size: 1.05rem; line-height: 1.8;">
                            Jenjang pendidikan: <strong>Madrasah Ibtidaiyah</strong>, <strong>SMP</strong>, dan <strong>SMA</strong>. Kurikulumnya seimbang antara pendidikan agama dan umum.
                        </p>
                        <div class="mt-3">
                            <span class="badge bg-success bg-gradient px-3 py-2 rounded-pill text-uppercase fw-semibold">Sejak 1982</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <!-- Portfolio Section-->

    <!-- Ekstrakurikuler Section -->
    <section class="py-5" id="ekstrakurikuler" style="background: #f9fdf9;">
        <div class="container">
            <h2 class="text-center text-uppercase mb-5 fw-bold" style="color: #1b5e20;">
                Ekstrakurikuler & Kegiatan Santri
            </h2>
            <div class="row g-4 justify-content-center">

                <!-- Card Item -->
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="card h-100 border-0 shadow-lg rounded-4 position-relative overflow-hidden">
                        <img src="assets/img/basket.png" class="card-img-top" alt="Basket">
                        <div class="position-absolute top-0 start-0 bg-success text-white px-3 py-1 rounded-end-bottom">
                            Basket
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-success fw-bold">Ekstra Basket</h5>
                            <p class="card-text small">Melatih kekompakan dan fisik melalui olahraga kompetitif yang digemari santri.</p>
                        </div>
                    </div>
                </div>

                <!-- Card Item -->
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-lg rounded-4 position-relative overflow-hidden">
                        <img src="assets/img/Silat.jpeg" class="card-img-top" alt="Silat">
                        <div class="position-absolute top-0 start-0 bg-success text-white px-3 py-1 rounded-end-bottom">
                            Silat
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-success fw-bold">Pencak Silat</h5>
                            <p class="card-text small">Kegiatan harian yang menumbuhkan kecintaan Silat.</p>
                        </div>
                    </div>
                </div>

                <!-- Card Item -->
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-lg rounded-4 position-relative overflow-hidden">
                        <img src="assets/img/Pramuka.png" class="card-img-top" alt="Pramuka">
                        <div class="position-absolute top-0 start-0 bg-success text-white px-3 py-1 rounded-end-bottom">
                            Pramuka
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-success fw-bold">Kegiatan Pramuka</h5>
                            <p class="card-text small">Menanamkan jiwa kepemimpinan dan kemandirian lewat kegiatan lapangan dan upacara.</p>
                        </div>
                    </div>
                </div>

                <!-- Card Item -->
                <div class="col-md-3 col-sm-6 " data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow-lg rounded-4 position-relative overflow-hidden">
                        <img src="assets/img/Upacara.jpg" class="card-img-top" alt="Upacara">
                        <div class="position-absolute top-0 start-0 bg-success text-white px-3 py-1 rounded-end-bottom">
                            Upacara
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-success fw-bold">Upacara Bendera</h5>
                            <p class="card-text small">Mengajarkan nasionalisme dan kedisiplinan melalui kegiatan rutin setiap minggu.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    
    </div>
</section>

    <!-- Panduan Pendaftaran Section -->
    <section class="how-it-works py-5 position-relative text-white" id="panduan" style="background: linear-gradient(rgba(47, 79, 79, 0.6), rgba(47, 79, 79, 0.6)), url('your-background.jpg') center/cover no-repeat;">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">Panduan Pendaftaran</h2>
            <div class="row g-5">
                <div class="col-md-1 d-flex flex-column align-items-center">
                    <div class="step-icon bg-white text-primary mb-5 rounded-circle d-flex justify-content-center align-items-center" style="width:60px; height:60px;">
                        <i class="fas fa-search fa-lg"></i>
                    </div>
                    <div class="step-icon bg-white text-primary mb-5 rounded-circle d-flex justify-content-center align-items-center" style="width:60px; height:60px;">
                        <i class="fas fa-bookmark fa-lg"></i>
                    </div>
                    <div class="step-icon bg-white text-primary rounded-circle d-flex justify-content-center align-items-center" style="width:60px; height:60px;">
                        <i class="fas fa-book-reader fa-lg"></i>
                    </div>
                </div>
                <div class="col-md-11">
                    <div class="mb-5">
                        <h5 class="fw-bold">Pilih Jurusan</h5>
                        <p>Pendaftaran dibuka untuk tahun ajaran 2025/2026 Tersedia jurusan <strong>IPA</strong>, <strong>IPS</strong>, dan <strong>Bahasa</strong></p>
                    </div>
                    <div class="mb-5">
                        <h5 class="fw-bold">Daftar Akun</h5>
                        <p>Klik <strong>Sign In</strong>. Jika belum memiliki akun, klik <strong>Sign Up</strong>, lalu lengkapi data dan unggah berkas yang diminta secara online</p>
                    </div>
                    <div>
                        <h5 class="fw-bold">Mulai Tes Seleksi Online</h5>
                        <p>Setelah akun berhasil dibuat dan data lengkap diunggah, Anda dapat langsung mengikuti tes seleksi online melalui portal pendaftaran.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pengumuman Section -->
   <section class="py-5 bg-light" id="pengumuman">
  <div class="container">
    <!-- HERO SECTION -->
    <div class="row align-items-center mb-5" data-aos="fade-right">
      <div class="col-md-6">
        <h1 class="display-5 fw-bold text-dark">PPDB <span class="text-success">Al-Ghozali</span></h1>
        <p class="lead mb-4">Informasi lengkap penerimaan siswa baru tahun ajaran 2025/2026. Segera siapkan berkas dan ikuti tahapan seleksi.</p>
      </div>
      <div class="col-md-6">
        <div class="position-relative">
          <img src="assets/img/portfolio/ppdb2.png" alt="Pengumuman PPDB" class="img-fluid rounded-4 shadow-lg" style="max-width: 400px;">

        </div>
      </div>
    </div>

    <div class="row align-items-center mb-5" data-aos="fade-left">
  <!-- Kolom Gambar (sekarang di kiri) -->
  <div class="col-md-6">
    <div class="position-relative">
      <img src="assets/img/portfolio/tes.jpg" alt="Tes Online PPDB" class="img-fluid rounded-4 shadow-lg" style="max-width: 400px;">
    </div>
  </div>

  <!-- Kolom Teks -->
  <div class="col-md-6">
    <h1 class="display-5 fw-bold text-dark">Ujian Seleksi <span class="text-success">Al-Ghozali</span></h1>
    <p class="lead mb-4">Seleksi akan dilakukan melalui ujian online setelah peserta berhasil menyelesaikan proses pendaftaran</p>
  </div>
</div>




    <!-- GRID SECTION -->
    <div class="row g-4">

      <!-- Persyaratan -->
      <div class="col-md-6" data-aos='fade-right'>
        <div class="card border-0 shadow-sm h-100 rounded-4">
          <div class="card-body">
            <h4 class="fw-bold text-success">📋 Persyaratan Umum</h4>
            <p>Terbuka untuk lulusan SD/MI. Upload pas foto, kartu keluarga, akta lahir, dan ijazah saat mendaftar. Syarat lengkap tersedia di menu Pendaftaran.</p>
          </div>
        </div>
      </div>

      
      <!-- Hasil -->
      <div class="col-md-6" data-aos='fade-left'>
        <div class="card border-0 shadow-sm h-100 rounded-4">
          <div class="card-body">
            <h4 class="fw-bold text-success">📢 Hasil Seleksi</h4>
            <p>Hasil seleksi akan diumumkan online pada <strong>24 Juni 2025</strong>. Cek akun masing-masing atau website resmi PPDB.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <!-- About Section-->


    <!-- Footer-->
    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row text-center text-md-start">
                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase mb-3">Kontak</h5>
                    <p class="mb-1"><i class="fas fa-phone-alt me-2"></i>(0251) 8614072</p>
                    <p><i class="fab fa-whatsapp me-2"></i>0813 8074 5531</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase mb-3">Media Sosial</h5>
                    <a class="text-white me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="text-white me-3" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="text-white me-3" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="text-white" href="#"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="col-md-4">
                    <h5 class="text-uppercase mb-3">Alamat</h5>
                    <p class="mb-0">Jl. Permata No.19, Desa Curug<br>Kec. Gunung Sindur, Kab. Bogor<br>Jawa Barat, Indonesia</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Copyright -->
    <div class="text-center py-3 bg-secondary text-white">
        <small>&copy; 2025 PPDB Online - Pondok Pesantren Al Ghozali</small>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <!-- Scroll to Top Button -->
    <a class="position-fixed bottom-0 end-0 m-4 btn btn-primary rounded-circle shadow d-lg-none" href="#page-top" style="z-index: 1030;">
        <i class="fas fa-arrow-up"></i>
    </a>


    <!-- jQuery (Hanya jika dibutuhkan) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap 5 Bundle JS (sudah termasuk Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin Tambahan -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>

    <!-- Skrip Kustom -->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>

</html>