<?php
$history = [
    [
        'name' => 'Agis',
        'course' => 'PHP Dasar',
        'participant' => 'Mahasiswa',
        'method' => 'Online',
        'package' => 1,
        'total' => 280000,
        'status' => 'Selesai'
    ],
    [
        'name' => 'Argon',
        'course' => 'Web Dasar',
        'participant' => 'Mahasiswa',
        'method' => 'Hybrid',
        'package' => 2,
        'total' => 480000,
        'status' => 'Berjalan'
    ],
    [
        'name' => 'Martin',
        'course' => 'Laravel Fundamental',
        'participant' => 'Umum',
        'method' => 'Offline',
        'package' => 1,
        'total' => 500000,
        'status' => 'Selesai'
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
  <title>History Pendaftaran - KursusKu</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    .history-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      font-size: 14px;
    }

    .history-table th,
    .history-table td {
      padding: 10px 12px;
      border: 1px solid #D5D69A;
      text-align: left;
    }

    .history-table th {
      background: #365004;
      color: #EDE383;
    }

    .history-table td {
      background: #FFFBEA;
      color: #351903;
    }

    .history-table tr:nth-child(even) td {
      background: #F4F1B8;
    }

    .status {
      font-weight: 600;
      color: #925E06;
    }

    .page-actions {
      margin-top: 20px;
    }
  </style>
</head>

<body>
<main class="container result-page">

  <section class="page-intro">
    <p class="eyebrow">History Dummy</p>
    <h1>Riwayat Pendaftaran</h1>
    <p>Data berikut merupakan data latihan untuk menampilkan penggunaan perulangan PHP.</p>
  </section>

  <section class="summary-card">

    <table class="history-table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Kursus</th>
          <th>Peserta</th>
          <th>Metode</th>
          <th>Paket</th>
          <th>Total</th>
          <th>Status</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($history as $index => $data): ?>
          <tr>
            <td><?= $index + 1 ?></td>
            <td><?= e($data['name']) ?></td>
            <td><?= e($data['course']) ?></td>
            <td><?= e($data['participant']) ?></td>
            <td><?= e($data['method']) ?></td>
            <td><?= e($data['package']) ?> paket</td>
            <td>Rp <?= number_format($data['total'], 0, ',', '.') ?></td>
            <td class="status"><?= e($data['status']) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>

    </table>

    <div class="page-actions">
      <a class="btn-link" href="registration.php">Kembali ke Pendaftaran</a>
      <a class="btn-link" href="index.php">Beranda</a>
    </div>

  </section>

</main>
</body>
</html>