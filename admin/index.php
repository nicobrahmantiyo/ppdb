<!doctype html>
<html class="no-js" lang="en">

<?php
include '../dbconnect.php';
include '../cek.php';
if ($role !== 'Admin') {
    header("location:../login.php");
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pondok Pesantren Al Ghozali: Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/images/icon/favicon.ico">

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="../assets/css/themify-icons.css">

    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.js"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-144808195-1');
    </script>

    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">

    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <style>
        /* Memberikan jarak antar item tab agar tidak terlalu rapat */
        .nav-tabs>li.nav-item-custom {
            margin-right: 15px;
            /* Sesuaikan nilai ini sesuai keinginan Anda */
        }

        /* Menyesuaikan padding pada link tab agar area klik lebih luas dan terlihat lebih lega */
        .nav-tabs>li>a {
            padding: 10px 20px;
            /* Atas/Bawah 10px, Kiri/Kanan 20px */
            /* Mengatur ulang warna teks dan background untuk tab yang tidak aktif */
            color: #555;
            /* Warna teks abu-abu gelap */
            background-color: #f8f8f8;
            /* Background abu-abu terang */
            border: 1px solid #ddd;
            border-bottom-color: transparent;
            /* Hilangkan border bawah */
            border-radius: 4px 4px 0 0;
            /* Sudut membulat di atas */
        }

        /* Mengatur ulang warna teks dan background untuk tab yang aktif */
        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:hover,
        .nav-tabs>li.active>a:focus {
            color: #007bff;
            /* Warna biru Bootstrap untuk teks aktif */
            background-color: #fff;
            /* Background putih untuk tab aktif */
            border: 1px solid #ddd;
            border-bottom-color: transparent;
            /* Hilangkan border bawah agar menyatu dengan konten */
            cursor: default;
            /* Kursor default untuk tab aktif */
        }

        /* Efek hover untuk tab yang tidak aktif */
        .nav-tabs>li>a:hover {
            background-color: #e9ecef;
            /* Abu-abu sedikit lebih gelap saat di-hover */
            border-color: #dee2e6 #dee2e6 #fff;
            /* Border saat hover */
        }

        /* Menyesuaikan jarak atas pada konten tab (optional) */
        .tab-content {
            margin-top: 15px;
            /* Memberikan sedikit jarak dari navigasi tab */
            padding: 15px;
            /* Padding di dalam konten tab */
            border: 1px solid #ddd;
            /* Border di sekeliling konten tab */
            border-top: none;
            /* Hilangkan border atas karena sudah ada di tab navigasi */
            border-radius: 0 0 4px 4px;
            /* Sudut membulat di bawah */
            background-color: #fff;
            /* Background putih untuk konten tab */
        }

        /* Optional: Style untuk teks di dalam konten tab */
        .tab-content p {
            margin-bottom: 8px;
            line-height: 1.5;
        }

        .tab-content p strong {
            font-weight: 600;
            /* Sedikit lebih tebal dari default bold */
            margin-right: 5px;
            /* Jarak antara label dan nilai */
            min-width: 120px;
            /* Agar labelnya sedikit sejajar */
            display: inline-block;

            /* Untuk bisa pakai min-width */
            .map-container {
                position: relative;
                padding-bottom: 56.25%;
                /* Rasio aspek 16:9 (450/800 = 0.5625) */
                height: 0;
                overflow: hidden;
                margin-top: 15px;
                /* Memberi jarak dari teks alamat */
            }

            .map-container iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border: 0;
            }
        }
    </style>
</head>

<body class="bg-light">
    <div class="d-flex">
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <div class="page-container">
            <div class="sidebar-menu">
                <div class="sidebar-header">
                    <a href="index.php"><img src="../assets/img/favicon2.png" alt="logo" width="100%"></a>
                </div>
                <div class="main-menu">
                    <div class="menu-inner">
                        <nav>
                            <ul class="metismenu" id="menu">
                                <li class="active"><a href="index.php"><span>Dashboard</span></a></li>
                                <li>
                                    <a href="form.php"><i class="ti-layout"></i><span>Formulir</span></a>
                                </li>
                                <li>
                                    <a href="user.php"><i class="ti-layout"></i><span>User Terdaftar</span></a>
                                </li>
                                <li>
                                    <a href="admin.php"><i class="ti-layout"></i><span>Kelola Admin</span></a>
                                </li>
                                <li>
                                    <a href="../logout.php"><span>Logout</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="flex-grow-1 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3>DASHBOARD ADMIN</h3>
                    <div>
                        <script>
                            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                                'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
                            ];
                            var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                            var date = new Date();
                            var day = date.getDate();
                            var month = date.getMonth();
                            var thisDay = days[date.getDay()];
                            var yy = date.getYear();
                            var year = (yy < 1000) ? yy + 1900 : yy;
                            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                        </script>
                    </div>
                </div>

                <div class="row g-4 mb-4">
                    <div class="col-md-3">
                        <div class="card bg-primary text-white shadow">
                            <div class="card-body">
                                <h6>Jumlah Pendaftar</h6>
                                <h3>2</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-warning text-dark shadow">
                            <div class="card-body">
                                <h6>Data Sekolah</h6>
                                <h3>2</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-danger text-white shadow">
                            <div class="card-body">
                                <h6>Data Jurusan</h6>
                                <h3>3</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-success text-white shadow">
                            <div class="card-body">
                                <h6>Jumlah Kuota</h6>
                                <h3>114</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">Data Lembaga</h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active nav-item-custom">
                                <a href="#profile" data-toggle="tab">
                                    <i class="fa fa-user"></i> Profile
                                </a>
                            </li>
                            <li class="nav-item-custom">
                                <a href="#alamat" data-toggle="tab">
                                    <i class="fa fa-map-marker"></i> Alamat Lembaga
                                </a>
                            </li>
                            <li class="nav-item-custom">
                                <a href="#kontak" data-toggle="tab">
                                    <i class="fa fa-phone"></i> Kontak
                                </a>
                            </li>
                            <li class="nav-item-custom">
                                <a href="#kepala" data-toggle="tab">
                                    <i class="fa fa-graduation-cap"></i> Kepala Madrasah
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content mt-3">
                            <div class="tab-pane in active" id="profile">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>NPYP:</strong> AD2741</p>
                                        <p><strong>NPSN:</strong> 20232351</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Nama Sekolah:</strong> SMA ISLAM AL-GHOZALI</p>
                                        <p><strong>Status Sekolah:</strong> Swasta</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="alamat">
                                <h5>Informasi Alamat:</h5>
                                <p><strong>Alamat:</strong> JL. PERMATA NO. 19 RT 06/05</p>
                                <div class="map-container" style="margin-top: 15px;">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.9984127193075!2d106.71798587593833!3d-6.3942048625423125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e6032eb53753%3A0x2c6227f7544bf76!2sPondok%20Modern%20Al%20Ghozali%20SMP%20SMA%20Islam!5e0!3m2!1sid!2sid!4v1751099963299!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></src=>
                                        width="100%"
                                        height="350"
                                        style="border:0;"
                                        allowfullscreen=""
                                        loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
                                </div>
                            </div>
                            <div class="tab-pane" id="kontak">
                                <p><strong>Email:</strong> smaislamalghozali22@gmail.com</p>
                                <p><strong>Telepon:</strong> (021) 8614072</p>
                            </div>
                            <div class="tab-pane" id="kepala">
                                <p><strong>Nama:</strong> Drs. Ahmad Sanusi</p>
                                <p><strong>NIP:</strong> 197509231998021001</p>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="mt-5 text-center text-muted">
                    <small>PPDB Online Pondok Pesantren Al Ghozali &copy; 2025</small>
                </footer>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>

    <script src="../assets/js/line-chart.js"></script>
    <script src="../assets/js/pie-chart.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/scripts.js"></script>

</body>

</html>