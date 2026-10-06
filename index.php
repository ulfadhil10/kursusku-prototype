<?php
require_once __DIR__ . '/helpers.php';

$courses = [
    ['code'=>'WEB-01','name'=>'Web Dasar','fee'=>300000,'quota'=>30,'registered'=>12,'start_date'=>'2026-09-21'],
    ['code'=>'PHP-01','name'=>'PHP Dasar','fee'=>350000,'quota'=>30,'registered'=>18,'start_date'=>'2026-09-22'],
    ['code'=>'LAR-01','name'=>'Laravel Fundamental','fee'=>500000,'quota'=>25,'registered'=>25,'start_date'=>'2026-09-28'],
];

$siteName = "KursusKu";
$tagline = "Belajar Teknologi, Bangun Masa Depan";
$tahun = date("Y");
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= $siteName ?> - Belajar Teknologi</title>

  <link rel="stylesheet" href="assets/css/style.css">

  <style>
  body {
    font-family: "Trebuchet MS", sans-serif;
    color: #351903;
  }

  /* HERO */
  .hero-modern {
    padding: 75px 0;
    background: linear-gradient(135deg, #EDE383, #FFFBEA);
  }

  .hero-grid {
    display: grid;
    grid-template-columns: 1.05fr 0.95fr;
    align-items: center;
    gap: 55px;
  }

  .hero-label {
    display: inline-block;
    padding: 7px 14px;
    border-radius: 30px;
    background: #8DA432;
    color: #351903;
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 18px;
  }

  .hero-modern h1 {
    margin: 0 0 18px;
    font-size: 52px;
    line-height: 1.1;
    color: #351903;
  }

  .hero-modern h1 span {
    color: #365004;
  }

  .hero-modern p {
    max-width: 570px;
    font-size: 17px;
    line-height: 1.7;
    color: #665522;
    margin-bottom: 28px;
  }

  .hero-buttons {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
  }

  .hero-btn {
    display: inline-block;
    padding: 13px 22px;
    border-radius: 9px;
    text-decoration: none;
    font-weight: 700;
    transition: 0.2s;
  }

  .hero-btn.primary {
    background: #365004;
    color: #EDE383;
  }

  .hero-btn.primary:hover {
    background: #351903;
  }

  .hero-btn.secondary {
    background: #FFFBEA;
    color: #365004;
    border: 1px solid #8DA432;
  }

  .hero-image-wrap {
    position: relative;
  }

  .hero-modern-image {
    width: 100%;
    max-height: 390px;
    object-fit: cover;
    border-radius: 22px;
    box-shadow: 0 18px 40px rgba(53, 25, 3, 0.16);
  }

  /* STATISTIK */
  .stats-section {
    padding: 25px 0;
    background: #FFFBEA;
  }

  .stats-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 18px;
  }

  .stat-card {
    padding: 20px;
    text-align: center;
    border: 1px solid #D5D69A;
    border-radius: 14px;
    background: #FFFBEA;
  }

  .stat-card strong {
    display: block;
    font-size: 27px;
    color: #365004;
    margin-bottom: 5px;
  }

  .stat-card span {
    color: #665522;
    font-size: 14px;
  }

  /* SECTION */
  .modern-section {
    padding: 70px 0;
  }

  .section-heading {
    text-align: center;
    margin-bottom: 38px;
  }

  .section-heading small {
    color: #925E06;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
  }

  .section-heading h2 {
    margin: 8px 0;
    color: #351903;
    font-size: 32px;
  }

  .section-heading p {
    color: #665522;
    max-width: 620px;
    margin: auto;
  }

  /* KEUNGGULAN */
  .feature-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 22px;
  }

  .feature-card {
    padding: 27px;
    border: 1px solid #D5D69A;
    border-radius: 16px;
    background: #FFFBEA;
    box-shadow: 0 7px 20px rgba(53, 25, 3, 0.04);
  }

  .feature-icon {
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    background: #8DA432;
    color: #351903;
    font-size: 21px;
    font-weight: bold;
    margin-bottom: 16px;
  }

  .feature-card h3 {
    margin: 0 0 8px;
    color: #365004;
  }

  .feature-card p {
    margin: 0;
    color: #665522;
    line-height: 1.6;
  }

  /* KATALOG CARD */
  .course-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 22px;
  }

  .course-card {
    border: 1px solid #D5D69A;
    border-radius: 16px;
    overflow: hidden;
    background: #FFFBEA;
    box-shadow: 0 7px 20px rgba(53, 25, 3, 0.04);
  }

  .course-top {
    padding: 20px;
    background: #EDE383;
  }

  .course-code {
    font-size: 12px;
    color: #925E06;
    font-weight: 700;
  }

  .course-top h3 {
    margin: 8px 0 0;
    color: #351903;
  }

  .course-body {
    padding: 20px;
  }

  .course-price {
    font-size: 21px;
    font-weight: 700;
    color: #925E06;
    margin-bottom: 14px;
  }

  .course-info {
    display: flex;
    justify-content: space-between;
    padding: 9px 0;
    border-bottom: 1px solid #D5D69A;
    color: #665522;
    font-size: 14px;
  }

  .course-status {
    margin-top: 15px;
    display: inline-block;
    padding: 6px 10px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
  }

  .available {
    background: #8DA432;
    color: #351903;
  }

  .full {
    background: #925E06;
    color: #EDE383;
  }

  /* VIDEO */
  .video-section {
    background: #EDE383;
  }

  .video-box {
    max-width: 760px;
    margin: auto;
    background: #FFFBEA;
    padding: 14px;
    border-radius: 18px;
    box-shadow: 0 10px 30px rgba(53, 25, 3, 0.06);
  }

  .video-box iframe {
    display: block;
    width: 100%;
    min-height: 420px;
    border-radius: 12px;
  }

  /* CTA */
  .cta-box {
    padding: 45px;
    text-align: center;
    border-radius: 20px;
    background: linear-gradient(135deg, #365004, #8DA432);
    color: #EDE383;
  }

  .cta-box h2 {
    margin-top: 0;
    font-size: 30px;
  }

  .cta-box p {
    max-width: 600px;
    margin: 0 auto 24px;
    line-height: 1.6;
    opacity: 0.92;
  }

  .cta-button {
    display: inline-block;
    padding: 13px 25px;
    background: #EDE383;
    color: #351903;
    border-radius: 9px;
    text-decoration: none;
    font-weight: 700;
  }

  @media (max-width: 800px) {
    .hero-grid,
    .feature-grid,
    .course-grid {
      grid-template-columns: 1fr;
    }

    .hero-modern h1 {
      font-size: 38px;
    }

    .stats-grid {
      grid-template-columns: 1fr;
    }
  }
</style>
</head>

<body>

<header class="header">
  <div class="container">
    <h1><?= $siteName ?></h1>
    <p><?= $tagline ?></p>
  </div>
</header>

<nav class="navbar">
  <div class="container">
    <a href="index.php">Beranda</a>
    <a href="#keunggulan">Keunggulan</a>
    <a href="#kursus">Katalog</a>
    <a href="#video">Media</a>
    <a href="registration.php">Daftar Kursus</a>
  </div>
</nav>

<main>

  <!-- HERO -->
  <section class="hero-modern">
    <div class="container hero-grid">

      <div>
        <span class="hero-label">PLATFORM BELAJAR TEKNOLOGI</span>

        <h1>
          Belajar Teknologi,
          <span>Bangun Masa Depan.</span>
        </h1>

        <p>
          Temukan kursus pemrograman yang sesuai dengan kebutuhanmu.
          Belajar secara bertahap, latihan dengan terarah, dan
          kembangkan kemampuan melalui materi yang praktis.
        </p>

        <div class="hero-buttons">
          <a href="#kursus" class="hero-btn primary">
            Lihat Katalog
          </a>

          <a href="registration.php" class="hero-btn secondary">
            Daftar Sekarang
          </a>

          <a href="fee-calculator.php" class="hero-btn secondary">
            Hitung Estimasi Biaya
          </a>
        </div>
      </div>

      <div class="hero-image-wrap">
        <img
          src="assets/img/image1.png"
          alt="Belajar pemrograman web"
          class="hero-modern-image">
      </div>

    </div>
  </section>


  <!-- STATISTIK -->
  <section class="stats-section">
    <div class="container">

      <div class="stats-grid">

        <div class="stat-card">
          <strong>3</strong>
          <span>Pilihan Kursus</span>
        </div>

        <div class="stat-card">
          <strong>4+</strong>
          <span>Materi Teknologi</span>
        </div>

        <div class="stat-card">
          <strong>PHP</strong>
          <span>Teknologi Utama</span>
        </div>

      </div>

    </div>
  </section>


  <!-- KEUNGGULAN -->
  <section id="keunggulan" class="modern-section">

    <div class="container">

      <div class="section-heading">
        <small>Kenapa KursusKu?</small>
        <h2>Belajar Lebih Terarah</h2>
        <p>
          KursusKu membantu peserta mempelajari teknologi
          secara bertahap melalui materi dan latihan yang relevan.
        </p>
      </div>

      <div class="feature-grid">

        <div class="feature-card">
          <div class="feature-icon">01</div>
          <h3>Materi Praktis</h3>
          <p>
            Materi dirancang agar peserta dapat langsung
            memahami konsep dan menerapkannya dalam latihan.
          </p>
        </div>

        <div class="feature-card">
          <div class="feature-icon">02</div>
          <h3>Belajar Bertahap</h3>
          <p>
            Peserta dapat memilih kursus sesuai tingkat
            kemampuan, mulai dari dasar hingga lanjutan.
          </p>
        </div>

        <div class="feature-card">
          <div class="feature-icon">03</div>
          <h3>Berbasis Proyek</h3>
          <p>
            Pembelajaran diarahkan pada latihan pemrograman
            agar kemampuan dapat berkembang melalui praktik.
          </p>
        </div>

      </div>

    </div>

  </section>


  <!-- KATALOG -->
  <section id="kursus" class="modern-section section-light">

    <div class="container">

      <div class="section-heading">
        <small>Katalog</small>
        <h2>Pilih Kursus yang Sesuai</h2>
        <p>
          Lihat pilihan kursus, biaya, jadwal mulai,
          dan ketersediaan kursi sebelum mendaftar.
        </p>
      </div>

      <div class="course-grid">

        <?php foreach ($courses as $course): ?>

          <?php
          $status = statusKursus(
            $course['quota'],
            $course['registered']
          );

          $sisa = sisaKursi(
            $course['quota'],
            $course['registered']
          );

          $statusClass =
            $status === 'Penuh'
              ? 'full'
              : 'available';
          ?>

          <div class="course-card">

            <div class="course-top">
              <span class="course-code">
                <?= htmlspecialchars($course['code']) ?>
              </span>

              <h3>
                <?= htmlspecialchars(trim($course['name'])) ?>
              </h3>
            </div>

            <div class="course-body">

              <div class="course-price">
                <?= rupiah($course['fee']) ?>
              </div>

              <div class="course-info">
                <span>Mulai</span>
                <strong>
                  <?= formatTanggal($course['start_date']) ?>
                </strong>
              </div>

              <div class="course-info">
                <span>Sisa Kursi</span>
                <strong>
                  <?= $sisa ?>
                </strong>
              </div>

              <span class="course-status <?= $statusClass ?>">
                <?= $status ?>
              </span>

            </div>

          </div>

        <?php endforeach; ?>

      </div>

    </div>

  </section>


  <!-- VIDEO -->
  <section id="video" class="modern-section video-section">

    <div class="container">

      <div class="section-heading">
        <small>Media Pembelajaran</small>
        <h2>Kenali Dunia Pemrograman</h2>
        <p>
          Pelajari lebih jauh tentang teknologi dan
          perkembangan dunia pemrograman.
        </p>
      </div>

      <div class="video-box">

        <iframe
          src="https://www.youtube.com/embed/nQinn48Bk2g"
          title="Pembelajaran Pemrograman"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen>
        </iframe>

      </div>

    </div>

  </section>


  <!-- CTA -->
  <section class="modern-section">

    <div class="container">

      <div class="cta-box">

        <h2>Siap Mulai Belajar?</h2>

        <p>
          Pilih kursus yang sesuai dengan kebutuhanmu
          dan mulai tingkatkan kemampuan pemrograman web.
        </p>

        <a href="registration.php" class="cta-button">
          Daftar Kursus Sekarang
        </a>

      </div>

    </div>

  </section>

</main>


<footer class="footer">

  <div class="container">

    <p>
      &copy; <?= $tahun ?> <?= $siteName ?>.
      Pemrograman Web III.
    </p>

  </div>

</footer>

</body>
</html>