<?php
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$studyProgram = trim($_POST['study_program'] ?? '');
$course = $_POST['course'] ?? '';
$participantType = $_POST['participant_type'] ?? '';
$interests = $_POST['interests'] ?? [];
$note = trim($_POST['note'] ?? '');
$learningMethod = $_POST['learning_method'] ?? '';
$packageCount = (int) ($_POST['package_count'] ?? 1);
$interestText = !empty($interests) ? implode(', ', $interests) : 'Minat belum dipilih';

// ini data kursus - harga
$courses = [
    'web-dasar' => ['name' => 'Web Dasar', 'fee' => 300000],
    'php-dasar' => ['name' => 'PHP Dasar', 'fee' => 350000],
    'laravel-fundamental' => ['name' => 'Laravel Fundamental', 'fee' => 500000],
];

$courseData = $courses[$course] ?? ['name' => '-', 'fee' => 0];
$courseName = $courseData['name'];
$fee = $courseData['fee'];

// SUBTOTAL = fee × jumlah paket
$subtotal = $fee * $packageCount;

// diskon berdasarkan tipe peserta
$discountPercent = 0;
if ($participantType === 'mahasiswa') {
    $discountPercent = 20;
} elseif ($participantType === 'guru') {
    $discountPercent = 15;
} else {
    $discountPercent = 0;
}

$discountAmount = $subtotal * $discountPercent / 100;
$total = $subtotal - $discountAmount;

// fungsi escape
function e($value): string {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hasil Pendaftaran - KursusKu</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
  .summary-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 8px;
    font-size: 14px;
  }

  .summary-table th,
  .summary-table td {
    padding: 10px 12px;
    border: 1px solid #D5D69A;
    text-align: left;
    vertical-align: top;
  }

  .summary-table th {
    width: 35%;
    background: #F4F1B8;
    color: #351903;
    font-weight: 600;
  }

  .summary-table td {
    background: #FFFBEA;
    color: #351903;
  }

  .summary-table tr:nth-child(even) td {
    background: #FFFDF2;
  }

  .summary-table .total-row th,
  .summary-table .total-row td {
    background: #8DA432;
    font-weight: 700;
    color: #351903;
  }

  .summary-table .discount-row td {
    color: #925E06;
    font-weight: 600;
  }

  .alert-success {
    background: #365004;
    color: #EDE383;
    border-left: 4px solid #925E06;
  }

  .alert-success h1,
  .alert-success p {
    color: #EDE383;
  }
</style>
</head>
<body>
<main class="container result-page">
  <section class="alert-success">
    <h1>Pendaftaran Berhasil Diproses</h1>
    <p>Periksa kembali data latihan berikut.</p>
  </section>

  <section class="summary-card">
    <h2>Data Peserta</h2>
    <table class="summary-table">
      <tbody>
        <tr>
          <th>Nama</th>
          <td><?= e($name) ?></td>
        </tr>
        <tr>
          <th>Email</th>
          <td><?= e($email) ?></td>
        </tr>
        <tr>
          <th>Nomor HP</th>
          <td><?= e($phone) ?></td>
        </tr>
        <tr>
          <th>Program Studi</th>
          <td><?= e($studyProgram) ?></td>
        </tr>
        <tr>
          <th>Kursus</th>
          <td><?= e($courseName) ?></td>
        </tr>
        <tr>
          <th>Tipe Peserta</th>
          <td><?= e($participantType) ?></td>
        </tr>
        <tr>
          <th>Metode</th>
          <td><?= e($learningMethod) ?></td>
        </tr>
        <tr>
          <th>Jumlah Paket</th>
          <td><?= e($packageCount) ?> paket</td>
        </tr>
        <tr>
          <th>Minat</th>
          <td><?= e($interestText) ?></td>
        </tr>
        <tr>
          <th>Catatan</th>
          <td><?= e($note ?: 'Tidak ada catatan tambahan.') ?></td>
        </tr>
      </tbody>
    </table>
  </section>

  <section class="summary-card">
    <h2>Rincian Biaya</h2>
    <table class="summary-table">
      <tbody>
        <tr>
          <th>Biaya satuan</th>
          <td>Rp <?= number_format($fee, 0, ',', '.') ?></td>
        </tr>
        <tr>
          <th>Subtotal (<?= $packageCount ?> paket)</th>
          <td>Rp <?= number_format($subtotal, 0, ',', '.') ?></td>
        </tr>
        <tr class="discount-row">
          <th>Diskon <?= $discountPercent ?>%</th>
          <td>-Rp <?= number_format($discountAmount, 0, ',', '.') ?></td>
        </tr>
        <tr class="total-row">
          <th>TOTAL AKHIR</th>
          <td>Rp <?= number_format($total, 0, ',', '.') ?></td>
        </tr>
      </tbody>
    </table>
  </section>

  <section class="summary-card">
    <h2>Fasilitas</h2>
    <ul class="facility-list">
      <li>Modul digital</li>
      <li>Sertifikat penyelesaian</li>
      <li>Forum diskusi kelas</li>
    </ul>
  </section>

  <div class="action-buttons">
    <a class="btn-link" href="registration.php">Daftar Lagi</a>
    <a class="btn-link" href="index.php">Beranda</a>
  </div>
</main>
</body>
</html>