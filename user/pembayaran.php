<?php
session_start();
include "../dbconnect.php";

// Simulasi user login
$user_id = $_SESSION['user_id'] ?? 1; // Ubah sesuai login nyata

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bank = $_POST['bank'];
    $amount = $_POST['amount'];

    $prefix = $bank === 'BNI' ? '9884387017' : '8800123400';
    $va_number = $prefix . str_pad($user_id, 4, "0", STR_PAD_LEFT) . rand(1000, 9999);

    $stmt = $conn->prepare("INSERT INTO payments (user_id, bank, va_number, amount) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("issi", $user_id, $bank, $va_number, $amount);
    $stmt->execute();

    echo "<div style='padding:20px;font-family:sans-serif'>";
    echo "<h3>Transfer ke VA berikut:</h3>";
    echo "<p>Bank: <strong>$bank</strong></p>";
    echo "<p>No VA: <strong>$va_number</strong></p>";
    echo "<p>Jumlah: <strong>Rp " . number_format($amount, 0, ',', '.') . "</strong></p>";
    echo "<a href='pembayaran.php'>Kembali</a>";
    echo "</div>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Pembayaran PPDB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card p-4 shadow">
            <h4>Pembayaran PPDB</h4>
            <form method="POST">
                <div class="mb-3">
                    <label>Pilih Bank</label>
                    <select name="bank" class="form-select" required>
                        <option value="">-- Pilih --</option>
                        <option value="BNI">BNI</option>
                        <option value="BCA">BCA</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Jumlah Pembayaran (Rp)</label>
                    <input type="number" name="amount" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Bayar</button>
            </form>
        </div>
    </div>
</body>

</html>