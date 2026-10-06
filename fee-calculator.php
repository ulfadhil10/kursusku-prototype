<?php
$courseName = 'Laravel Fundamental';
$fee = 500000;
$participantCount = 3;
$discountPercent = 10;
$adminFee = 50000;

$subtotal = $fee * $participantCount;
$discount = intdiv($subtotal * $discountPercent, 100);
$total = $subtotal - $discount + $adminFee;
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Kalkulator Biaya - KursusKu</title>
    <style>
        body{font-family:"Trebuchet MS",sans-serif;background:#EDE383;padding:32px;color:#351903}
        .card{max-width:720px;margin:auto;background:#FFFBEA;padding:24px;border-radius:16px;border:1px solid #D5D69A}
        table{width:100%;border-collapse:collapse}
        th,td{border-bottom:1px solid #D5D69A;padding:10px;text-align:left}
        th{background:#365004;color:#EDE383}
        td{color:#351903}
        .total{background:#365004;color:#EDE383;font-weight:bold}
        .total td{background:#365004;color:#EDE383}
        a{color:#925E06;font-weight:600}
        a:hover{color:#365004}
    </style>
</head>
<body>
<main class="card">
    <h1>Kalkulator Estimasi Biaya</h1>
    <p>Kursus: <strong><?= $courseName ?></strong></p>
    <table>
        <tr><th>Komponen</th><th>Nilai</th></tr>
        <tr><td>Biaya per peserta</td><td>Rp <?= number_format($fee,0,',','.') ?></td></tr>
        <tr><td>Jumlah peserta</td><td><?= $participantCount ?></td></tr>
        <tr><td>Subtotal</td><td>Rp <?= number_format($subtotal,0,',','.') ?></td></tr>
        <tr><td>Diskon (<?= $discountPercent ?>%)</td><td>Rp <?= number_format($discount,0,',','.') ?></td></tr>
        <tr><td>Biaya admin</td><td>Rp <?= number_format($adminFee,0,',','.') ?></td></tr>
        <tr class="total"><td>Total akhir</td><td>Rp <?= number_format($total,0,',','.') ?></td></tr>
    </table>
    <p><a href="index.php">Kembali ke Beranda</a></p>
</main>
</body>
</html>