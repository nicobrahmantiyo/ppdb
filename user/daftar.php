<!doctype html>
<html class="no-js" lang="en">

<?php
include '../dbconnect.php';
include '../cek.php';
if ($role !== 'User') {
    header("location:../login.php");
};
$userid = $_SESSION['userid'];

include 'submit.php';

//cek dulu sudah pernah submit belum
$cekdulu = mysqli_query($conn, "select * from userdata where userid='$userid'");
$lihathasil = mysqli_num_rows($cekdulu);

//kalau udah pernah submit
if ($lihathasil > 0) {
    header("location: mydata.php");
} else {
};

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Simulasi proses simpan data & upload file
    $upload_dir = 'uploads/';
    if (!file_exists($upload_dir)) mkdir($upload_dir);

    // Simpan bukti bayar (contoh)
    if (isset($_FILES['buktibayar']) && $_FILES['buktibayar']['error'] === UPLOAD_ERR_OK) {
        $tmp = $_FILES['buktibayar']['tmp_name'];
        $filename = basename($_FILES['buktibayar']['name']);
        move_uploaded_file($tmp, $upload_dir . $filename);
    }

    // Lakukan penyimpanan lainnya di database jika ada...

    // Redirect dengan status sukses
    header("Location: daftar.php?status=success");
    exit();
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pondok Pesantren Al Ghozali: Pendaftaran</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    <link rel="stylesheet" href="../assets/select2-4.0.6-rc.1/dist/css/select2.min.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-144808195-1');
    </script>
    <style>
        .modal.modal-top .modal-dialog {
  margin: 2rem auto 0 auto;
}

.modal.fade .modal-dialog {
  animation: fadeInDown 0.5s ease forwards;
}
@keyframes fadeInDown {
  from {
    opacity: 0;
    transform: translateY(-30px) scale(0.95);
  }
  to {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}

.modal.fade .modal-dialog {
  transition: transform 0.3s ease-out;
  animation: fadeInDown 0.5s ease forwards;
}
</style>

    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <a href="index.php"><img src="../assets/img/favicon2.png" alt="logo" width="100%"></a>
            </div>
          <div class="main-menu">
    <div class="menu-inner">
        <nav>
<ul class="metismenu" id="menu">
    <li>
        <a href="index.php"><i class="ti-home"></i> <span>Dashboard</span></a>
    </li>
    <li>
        <a href="daftar.php"><i class="ti-layout"></i> <span>Pendaftaran</span></a>
    </li>
    <li>
        <a href="tes.php"><i class="ti-pencil-alt"></i> <span>Tes</span></a>
    </li>
    <li>
        <a href="../logout.php"><i class="ti-power-off"></i> <span>Logout</span></a>
    </li>
</ul>


        </nav>
    </div>
</div>

        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li>
                                <h3>
                                    <div class="date">
                                        <script type='text/javascript'>
                                            <!--
                                            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                                            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                                            var date = new Date();
                                            var day = date.getDate();
                                            var month = date.getMonth();
                                            var thisDay = date.getDay(),
                                                thisDay = myDays[thisDay];
                                            var yy = date.getYear();
                                            var year = (yy < 1000) ? yy + 1900 : yy;
                                            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                                            //
                                            -->
                                        </script></b>
                                    </div>
                                </h3>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->

            <!-- page title area end -->
            <div class="main-content-inner">

                <!-- panduan -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h2>Pendaftaran</h2>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive">
                                        Selamat datang di sistem informasi Penerimaan Peserta Didik Baru (PPDB) Online.
                                        <br>Sistem ini disusun oleh Pondok Pesantren Al Ghozali
                                        <br><br>
                                        Panduan Pendaftaran:
                                        <br>1. Isi seluruh formulir yang ditampilkan kemudian periksa kembali, pastikan tidak ada data yang salah.
                                        <br>2. Klik submit, kemudian klik Confirm. Setelah di-confirm, data tidak dapat diubah kembali.
                                        <br>3. Jika sudah terdaftar,silahkan hubungin admin untuk No Ujian (085772691071)
                                        <br>4. Jadwal pelaksaan tes online dilaksanakan pada tanggal 23 Juni 2025, Pukul : 08.00 - 10.00 WIB
                                        <br>*Note: Pihak sekolah baru akan menerima data Anda setelah Anda klik 'Confirm'
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!------------------ Pisahin ------------------->


                <form action='submit.php' method="POST" enctype="multipart/form-data" >
                    <!-- formulir -->
                    <div class="row mt-5 mb-5">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-sm-flex justify-content-between align-items-center">
                                        <h2>Data Pribadi</h2>
                                        <p>* Data yang telah diinput tidak dapat diubah kembali, harap isi dengan teliti dan benar</p>
                                    </div>
                                    <div class="market-status-table mt-4">
                                        <div class="table-responsive" style="overflow-x:hidden;">

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>NISN*</label>
                                                        <input name="nisn" type="text" class="form-control" placeholder="NISN" maxlength="12" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>NIK*</label>
                                                        <input name="nik" type="text" class="form-control" placeholder="NIK" maxlength="16" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Nama Lengkap*</label>
                                                        <input name="namalengkap" type="text" class="form-control" placeholder="Nama Lengkap" maxlength="50" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Jenis Kelamin*</label>
                                                        <select class="form-control" name="jeniskelamin">
                                                            <option value="L">Laki-laki</option>
                                                            <option value="P">Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Tempat Lahir*</label>
                                                        <input name="tempatlahir" type="text" class="form-control" placeholder="Tempat Lahir" maxlength="20">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Tanggal Lahir*</label>
                                                        <input name="tgllahir" type="date" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat Lengkap</label>
                                                <input name="alamat" type="text" class="form-control" placeholder="Alamat" required>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Provinsi*:</label>
                                                        <div class="col-sm-9">
                                                            <?php
                                                            $sql_provinsi = mysqli_query($conn, "SELECT * FROM provinces ORDER BY name ASC");
                                                            ?>
                                                            <select class="form-control" name="provinsi" id="provinsi">
                                                                <option></option>
                                                                <?php
                                                                while ($rs_provinsi = mysqli_fetch_assoc($sql_provinsi)) {
                                                                    echo '<option value="' . $rs_provinsi['id'] . '">' . $rs_provinsi['name'] . '</option>';
                                                                }
                                                                ?>
                                                            </select>
                                                            <img src="asset/img/loading.gif" width="35" id="load1" style="display:none;" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Kota/Kabupaten*:</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" name="kota" id="kota">
                                                                <option></option>
                                                            </select>
                                                            <img src="asset/img/loading.gif" width="35" id="load2" style="display:none;" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Kecamatan*:</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" name="kecamatan" id="kecamatan">
                                                                <option></option>
                                                            </select>
                                                            <img src="asset/img/loading.gif" width="35" id="load3" style="display:none;" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Kelurahan*:</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" name="kelurahan" id="kelurahan">
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Agama*</label>
                                                        <select class="form-control" name="agama">
                                                            <option value="Islam">Islam</option>
                                                            <option value="Kristen">Kristen</option>
                                                            <option value="Katolik">Katolik</option>
                                                            <option value="Buddha">Buddha</option>
                                                            <option value="Hindu">Hindu</option>
                                                            <option value="Konghucu">Konghucu</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>No Telepon</label>
                                                        <input name="telepon" type="text" class="form-control" maxlength="15" required>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mt-5 mb-5">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-sm-flex justify-content-between align-items-center">
                                        <h2>Data Orang Tua</h2>
                                    </div>
                                    <div class="market-status-table mt-4">
                                        <div class="table-responsive" style="overflow-x:hidden;">

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>NIK Ayah*</label>
                                                        <input name="ayahnik" type="text" class="form-control" placeholder="NIK Ayah" maxlength="16">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Nama Ayah*</label>
                                                        <input name="ayahnama" type="text" class="form-control" placeholder="Nama Ayah" maxlength="40">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Pendidikan Ayah</label>
                                                        <select class="form-control" name="ayahpendidikan">
                                                            <option value="SD">SD</option>
                                                            <option value="SMP">SMP</option>
                                                            <option value="SMA">SMA/SMK/Sederajat</option>
                                                            <option value="S1">S1/Sederajat</option>
                                                            <option value="S2">S2</option>
                                                            <option value="S3">S3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Pekerjaan Ayah</label>
                                                        <select class="form-control" name="ayahpekerjaan">
                                                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                                                            <option value="PNS">PNS</option>
                                                            <option value="Wiraswasta">Wiraswasta</option>
                                                            <option value="Pegawai Swasta">Pegawai Swasta</option>
                                                            <option value="PHL">Pekerja Harian Lepas</option>
                                                            <option value="TNI/Polri">TNI/Polri</option>
                                                            <option value="Buruh">Buruh</option>
                                                            <option value="Pensiun">Pensiun</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Penghasilan Ayah per bulan</label>
                                                        <select class="form-control" name="ayahpenghasilan">
                                                            <option value="<500.000">
                                                                < Rp500.000</option>
                                                            <option value="500.000-1.000.000">Rp500.000-Rp1.500.000</option>
                                                            <option value="1.500.000-3.500.000">Rp1.500.000-Rp3.500.000</option>
                                                            <option value="3.000.000-5.000.000">Rp3.500.000-Rp5.000.000</option>
                                                            <option value="5.000.000-10.000.000">Rp5.000.000-Rp10.000.000</option>
                                                            <option value="10.000.000-20.000.000">Rp10.000.000-20.000.000</option>
                                                            <option value=">20.000.000">> Rp20.000.000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>No Telepon Ayah</label>
                                                        <input name="ayahtelepon" type="text" class="form-control" maxlength="15">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <hr>
                                            <br>


                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>NIK Ibu*</label>
                                                        <input name="ibunik" type="text" class="form-control" placeholder="NIK Ibu" maxlength="16">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Nama Ibu*</label>
                                                        <input name="ibunama" type="text" class="form-control" placeholder="Nama Ibu" maxlength="40">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Pendidikan Ibu</label>
                                                        <select class="form-control" name="ibupendidikan">
                                                            <option value="SD">SD</option>
                                                            <option value="SMP">SMP</option>
                                                            <option value="SMA">SMA/SMK/Sederajat</option>
                                                            <option value="S1">S1/Sederajat</option>
                                                            <option value="S2">S2</option>
                                                            <option value="S3">S3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Pekerjaan Ibu</label>
                                                        <select class="form-control" name="ibupekerjaan">
                                                            <option value="Tidak Bekerja">Ibu Rumah Tangga</option>
                                                            <option value="PNS">PNS</option>
                                                            <option value="Wiraswasta">Wiraswasta</option>
                                                            <option value="Pegawai Swasta">Pegawai Swasta</option>
                                                            <option value="PHL">Pekerja Harian Lepas</option>
                                                            <option value="TNI/Polri">TNI/Polri</option>
                                                            <option value="Buruh">Buruh</option>
                                                            <option value="Pensiun">Pensiun</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Penghasilan Ibu per bulan</label>
                                                        <select class="form-control" name="ibupenghasilan">
                                                            <option value="<500.000">
                                                                < Rp500.000</option>
                                                            <option value="500.000-1.000.000">Rp500.000-Rp1.500.000</option>
                                                            <option value="1.500.000-3.500.000">Rp1.500.000-Rp3.500.000</option>
                                                            <option value="3.000.000-5.000.000">Rp3.500.000-Rp5.000.000</option>
                                                            <option value="5.000.000-10.000.000">Rp5.000.000-Rp10.000.000</option>
                                                            <option value="10.000.000-20.000.000">Rp10.000.000-20.000.000</option>
                                                            <option value=">20.000.000">> Rp20.000.000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>No Telepon Ibu</label>
                                                        <input name="ibutelepon" type="text" class="form-control" maxlength="15">
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                            <hr>
                                            <br>


                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>NIK Wali</label>
                                                        <input name="walinik" type="text" class="form-control" placeholder="NIK Wali" maxlength="16">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Nama Wali</label>
                                                        <input name="walinama" type="text" class="form-control" placeholder="Nama Wali" maxlength="40">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Pekerjaan Wali</label>
                                                        <select class="form-control" name="walipekerjaan">
                                                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                                                            <option value="PNS">PNS</option>
                                                            <option value="Wiraswasta">Wiraswasta</option>
                                                            <option value="Pegawai Swasta">Pegawai Swasta</option>
                                                            <option value="PHL">Pekerja Harian Lepas</option>
                                                            <option value="TNI/Polri">TNI/Polri</option>
                                                            <option value="Buruh">Buruh</option>
                                                            <option value="Pensiun">Pensiun</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>No Telepon Wali</label>
                                                        <input name="walitelepon" type="text" class="form-control" maxlength="15">
                                                        <input type="hidden" value="<?= $userid; ?>" name="id">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="container mt-5 mb-5">
  <div class="row g-4">
    <!-- Card 1: Data Sekolah Asal & Berkas -->
    <div class="col-md-6">
      <div class="card h-100">
        <div class="card-body">
          <h4 class="card-title mb-3">Data Sekolah Asal & Berkas</h4>
          <p class="text-muted mb-4">Data yang telah diinput tidak dapat diubah kembali.</p>

          <div class="form-group mb-3">
            <label for="sekolahnpsn">NPSN Sekolah Asal</label>
            <input name="sekolahnpsn" type="text" class="form-control" placeholder="NPSN Sekolah Asal" maxlength="12">
          </div>

          <div class="form-group mb-3">
            <label for="sekolahnama">Nama Sekolah Asal</label>
            <input name="sekolahnama" type="text" class="form-control" placeholder="Nama Sekolah Asal" maxlength="40">
          </div>

          <div class="form-group mb-3">
            <label for="foto">Pas Foto 4x6 (JPG/PNG), maks 500KB</label>
            <input type="file" id="foto" name="foto" class="form-control">
          </div>

          <div class="row">
            <div class="col">
              <div class="form-group mb-3">
                <label for="scanijazahdepan">Ijazah Depan (JPG/PNG), maks 500KB</label>
                <input type="file" id="scanijazahdepan" name="scanijazahdepan"  accept=".jpg, .jpeg, .png" class="form-control">
              </div>
            </div>
            <div class="col">
              <div class="form-group mb-3">
                <label for="scanijazahbelakang">Ijazah Belakang (JPG/PNG), maks 500KB</label>
                <input type="file" id="scanijazahbelakang" name="scanijazahbelakang" accept=".jpg, .jpeg, .png" class="form-control">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Card 2: Upload Bukti Pembayaran -->
    <div class="col-md-6">
      <div class="card h-100">
        <div class="card-body">
          <h4 class="card-title mb-3">Upload Bukti Pembayaran</h4>

          <div class="alert alert-info" role="alert">
            <strong>Panduan Pembayaran:</strong><br>
            Silakan lakukan pembayaran ke salah satu VA berikut:<br>
            <strong>VA BCA:</strong> 01401234567890<br>
            <strong>VA Mandiri:</strong> 1111008987654321<br>
            <strong>VA BRI:</strong> 002112233445566<br><br>
            Upload bukti pembayaran dalam format JPG, PNG, atau PDF dengan ukuran maksimal 1MB.
          </div>

          <div class="form-group">
            <label for="buktibayar">Upload Bukti Pembayaran</label>
            <input type="file" id="buktibayar" name="buktibayar" accept=".jpg, .jpeg, .png" class="form-control">
          </div>
         <div class="modal-footer mt-3">
    <button type="submit" name="submit" class="btn btn-success">Simpan Data</button>

</div>

        </div>
      </div>
    </div>
  </div>
</div>

                </form>
            </div>
            <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-top">
    <div class="modal-content text-center p-4">
      <div class="modal-body">
        <div class="mb-3">
          <!-- Checkmark Icon -->
          <svg width="80" height="80" viewBox="0 0 48 48" fill="none">
            <circle cx="24" cy="24" r="22" stroke="#A1E3AF" stroke-width="4" fill="#EAF8ED"/>
            <path d="M14 24L21 31L34 18" stroke="#3CB371" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h4 class="fw-bold mb-2">Pendaftaran Berhasil</h4>
        <p class="mb-1">Selamat Pendaftaran Telah Berhasil Dilakukan,Terimakasih Telah Mendaftar.</p>
        <p class="text-success fw-semibold">Silakan Hubungi Admin Untuk No Ujian</p>
      </div>
    </div>
  </div>
</div>


            <!-- row area start-->
        </div>
    </div>
    <!-- main content area end -->
    <!-- footer area start-->
    <footer>
        <div class="footer-area">
            <p>PPDB Online Pondok Pesantren Al Ghozali</p>
        </div>
    </footer>
    <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <!-- jquery latest version -->
    <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="../assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="../assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/select2-4.0.6-rc.1/dist/js/select2.min.js"></script>
    <script src="../assets/select2-4.0.6-rc.1/dist/js/i18n/id.js"></script>
    <script src="../assets/js/app.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Tampilkan modal jika redirect dengan ?status=success
  const urlParams = new URLSearchParams(window.location.search);
  if (urlParams.get('status') === 'success') {
    const modal = new bootstrap.Modal(document.getElementById('successModal'));
    modal.show();
  }
</script>


</body>

</html>