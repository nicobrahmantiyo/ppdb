<?php
session_start();
include "../dbconnect.php";


$user_id = $_SESSION['user_id'] ?? 1;

$result = $conn->query("SELECT * FROM payments WHERE user_id = $user_id ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Riwayat Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h4>Riwayat Pembayaran</h4>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Bank</th>
                    <th>VA</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?= $row['bank'] ?></td>
                        <td><?= $row['va_number'] ?></td>
                        <td>Rp <?= number_format($row['amount'], 0, ',', '.') ?></td>
                        <td><?= $row['status'] ?></td>
                        <td><?= $row['created_at'] ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>