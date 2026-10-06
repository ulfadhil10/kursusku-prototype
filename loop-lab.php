<?php
$courses = [
    [
        'name' => 'Web Dasar',
        'fee' => 300000,
        'category' => 'Pemula'
    ],
    [
        'name' => 'PHP Dasar',
        'fee' => 350000,
        'category' => 'Pemula'
    ],
    [
        'name' => 'Laravel Fundamental',
        'fee' => 500000,
        'category' => 'Lanjutan'
    ]
];

function e($value): string {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Loop Lab - KursusKu</title>
  <link rel="stylesheet" href="assets/css/style.css">
 <style>
  .loop-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    font-size: 14px;
  }

  .loop-table th,
  .loop-table td {
    padding: 10px 12px;
    border: 1px solid #D5D69A;
    text-align: left;
    color: #351903;
  }

  .loop-table th {
    background: #365004;
    color: #EDE383 !important;
    font-weight: 700;
  }

  .loop-table td {
    background: #FFFBEA;
    color: #351903 !important;
  }

  .loop-table tr:nth-child(even) td {
    background: #F4F1B8;
  }

  .loop-box {
    margin-top: 25px;
    padding: 18px;
    background: #EDE383;
    border-radius: 10px;
    color: #351903;
  }

  .loop-box h2 {
    margin-top: 0;
    color: #365004;
  }

  .page-intro {
  background: #365004;
  color: #EDE383;
  padding: 28px 32px;
  border-radius: 14px;
  margin-bottom: 25px;
}

.page-intro .eyebrow {
  color: #EDE383;
}

.page-intro h1 {
  color: #EDE383;
  margin: 8px 0;
}

.page-intro p {
  color: #EDE383;
}
</style>
</head>

<body>
<main class="container result-page">

  <section class="page-intro">
    <p class="eyebrow">PHP Loop Lab</p>
    <h1>Latihan Perulangan Kursus</h1>
    <p>Halaman ini digunakan untuk latihan perulangan menggunakan PHP.</p>
  </section>

  <section class="summary-card">

    <h2>Daftar Kursus</h2>

    <table class="loop-table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Kursus</th>
          <th>Kategori</th>
          <th>Harga</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($courses as $index => $course): ?>
          <tr>
            <td><?= $index + 1 ?></td>
            <td><?= e($course['name']) ?></td>
            <td><?= e($course['category']) ?></td>
            <td>Rp <?= number_format($course['fee'], 0, ',', '.') ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <div class="loop-box">
      <h2>Perulangan Angka</h2>

      <?php for ($i = 1; $i <= 3; $i++): ?>
        <p>Paket belajar ke-<?= $i ?></p>
      <?php endfor; ?>

    </div>

    <div class="loop-box">
      <h2>Perulangan Kursus</h2>

      <ul>
        <?php foreach ($courses as $course): ?>
          <li>
            <?= e($course['name']) ?> -
            Rp <?= number_format($course['fee'], 0, ',', '.') ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <div class="page-actions">
      <a class="btn-link" href="registration.php">Kembali ke Pendaftaran</a>
      <a class="btn-link" href="index.php">Beranda</a>
    </div>

  </section>

</main>
</body>
</html>