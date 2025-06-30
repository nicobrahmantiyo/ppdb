<?php
session_start();

// Jika form dikirim, simpan data ke session
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['no_ujian'] = $_POST['no_ujian'];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>PPDB - Tes Online</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="https://unpkg.com/lottie-web@5.7.6/build/player/lottie.min.js"></script>
  <style>

    body, html {
      height: 100%;
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
    }
    .background {
      position: fixed;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      background: url('../assets/img/portfolio/ponpes.png') no-repeat center center fixed;
      background-size: cover;
      z-index: 0;
      filter: blur(5px);
    }
    .form-wrapper {
      height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh; 
}


    .form-container {
      max-width: 420px;
      background-color: rgba(255, 255, 255, 0.85);
      border-radius: 15px;
      padding: 35px 30px;
      box-shadow: 0 12px 40px rgba(0, 0, 0, 0.25);
      animation: fadeInUp 1s ease;
      backdrop-filter: saturate(180%) blur(10px);
    }

    .form-title {
      text-align: center;
      margin-bottom: 20px;
      color: #198754;
    }

    .form-logo {
      display: block;
      margin: 0 auto 15px;
      max-width: 100px;
    }


    .btn-success {
      background-color: #2e7d32;
      border-color: #2e7d32;
    }

    .btn-success:hover {
      background-color: #276628;
    }

    .top-bar {
      height: 60px;
      background-color: #2e7d32;
      color: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 30px;
    }

    iframe {
      width: 100%;
      height: 100%;
      border: none;
      display: block;

    }

    .timer {
      font-weight: bold;
    }

    @media (max-width: 576px) {
      .form-container {
        margin: 1rem;
        padding: 1.5rem;
      }

      .form-title {
        font-size: 1.25rem;
      }
    }
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>
<?php if (!isset($_SESSION['nama']) || !isset($_SESSION['no_ujian'])): ?>
  <!-- FORM PESERTA -->
<div class="background"></div>

  <div class="form-wrapper">
    <div class="form-container">
      <img src="../assets/img/favicon.ico" alt="Logo Al Ghozali" class="form-logo">
      <h4 class="form-title">Form Peserta Tes PPDB</h4>
      <form method="POST">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" id="nama" name="nama" class="form-control" required placeholder="nama">
        </div>
        <div class="mb-3">
          <label for="no_ujian" class="form-label">Nomor Ujian</label>
          <input type="text" id="no_ujian" name="no_ujian" class="form-control" required placeholder="12345678">
        </div>
        <button type="submit" class="btn btn-success w-100">
  Mulai Tes <i class="bi bi-play-fill ms-2"></i>
</button>
      </form>
    </div>
  </div>
<?php else: ?>
  <!-- HALAMAN TES -->
  <div class="top-bar">
    <span>Peserta: <?= htmlspecialchars($_SESSION['nama']) ?> | Nomor: <?= htmlspecialchars($_SESSION['no_ujian']) ?></span>
    <div class="timer" id="countdown">Sisa waktu: 60:00</div>
  </div>
 <iframe src="https://forms.gle/HGSdQG4NB1djXcXP8" allowfullscreen></iframe>

  <script>
    let duration = 60 * 60; // 60 menit
    const countdownEl = document.getElementById('countdown');

    const timer = setInterval(() => {
      const minutes = Math.floor(duration / 60);
      const seconds = duration % 60;
      countdownEl.textContent = `Sisa waktu: ${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
      if (--duration < 0) {
        clearInterval(timer);
        countdownEl.textContent = "Waktu habis!";
        alert("Waktu tes telah berakhir.");
      }
    }, 1000);
  </script>
<?php endif; ?>
</body>
</html>
