<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Test Matrix Pertemuan 6 - KursusKu</title>

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: "Trebuchet MS", Arial, sans-serif;
      background: #EDE383;
      color: #351903;
      padding: 35px 20px;
      min-height: 100vh;
    }

    .container {
      max-width: 1100px;
      margin: auto;
    }

    .header {
      background: #365004;
      padding: 28px 32px;
      border-radius: 18px;
      margin-bottom: 24px;
      border-left: 7px solid #925E06;
    }

    .badge-label {
      display: inline-block;
      background: #EDE383;
      color: #365004;
      padding: 6px 12px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: bold;
      margin-bottom: 12px;
    }

    h1 {
      color: #EDE383;
      font-size: 28px;
      margin-bottom: 7px;
    }

    .subtitle {
      color: #F4F1B8;
      font-size: 14px;
    }

    .matrix-card {
      background: #FFFBEA;
      border: 1px solid #D5D69A;
      border-radius: 16px;
      padding: 20px;
      box-shadow: 0 4px 12px rgba(53, 25, 3, 0.08);
      overflow-x: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      min-width: 850px;
    }

    thead th {
      background: #8DA432;
      color: #351903;
      padding: 13px 12px;
      text-align: left;
      font-size: 12px;
      border-bottom: 3px solid #365004;
    }

    tbody td {
      padding: 12px;
      font-size: 13px;
      border-bottom: 1px solid #D5D69A;
      color: #351903;
      vertical-align: top;
    }

    tbody tr:nth-child(even) td {
      background: #F4F1B8;
    }

    tbody tr:hover td {
      background: #EDE383;
    }

    .status {
      display: inline-block;
      padding: 5px 11px;
      border-radius: 15px;
      background: #365004;
      color: #EDE383;
      font-size: 11px;
      font-weight: bold;
    }

    @media (max-width: 640px) {
      body {
        padding: 20px 10px;
      }

      .header {
        padding: 22px;
      }

      h1 {
        font-size: 22px;
      }

      .matrix-card {
        padding: 12px;
      }
    }
  </style>
</head>

<body>
  <div class="container">

    <div class="header">
      <span class="badge-label">Evidence Week 06</span>
      <h1>Test Matrix Pertemuan 6</h1>
      <p class="subtitle">Hasil pengujian form pendaftaran KursusKu</p>
    </div>

    <div class="matrix-card">
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Skenario</th>
            <th>Actual</th>
            <th>Expected</th>
            <th>Status</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>1</td>
            <td>Mahasiswa, Web Dasar, 1 paket</td>
            <td>Rp 240.000</td>
            <td>Rp 240.000</td>
            <td><span class="status">PASS</span></td>
          </tr>

          <tr>
            <td>2</td>
            <td>Guru, PHP Dasar, 1 paket</td>
            <td>Rp 297.500</td>
            <td>Rp 297.500</td>
            <td><span class="status">PASS</span></td>
          </tr>

          <tr>
            <td>3</td>
            <td>Umum, Laravel Fundamental, 1 paket</td>
            <td>Rp 500.000</td>
            <td>Rp 500.000</td>
            <td><span class="status">PASS</span></td>
          </tr>

          <tr>
            <td>4</td>
            <td>Mahasiswa, Web Dasar, 2 paket</td>
            <td>Rp 480.000</td>
            <td>Rp 480.000</td>
            <td><span class="status">PASS</span></td>
          </tr>

          <tr>
            <td>5</td>
            <td>Nama kosong</td>
            <td>Nama wajib diisi.</td>
            <td>Nama wajib diisi.</td>
            <td><span class="status">PASS</span></td>
          </tr>

          <tr>
            <td>6</td>
            <td>Email tidak valid</td>
            <td>Email tidak valid.</td>
            <td>Email tidak valid.</td>
            <td><span class="status">PASS</span></td>
          </tr>

          <tr>
            <td>7</td>
            <td>Minat kosong</td>
            <td>Minat belum dipilih</td>
            <td>Minat belum dipilih</td>
            <td><span class="status">PASS</span></td>
          </tr>

          <tr>
            <td>8</td>
            <td>3 minat dipilih</td>
            <td>Frontend, Backend, Database</td>
            <td>Frontend, Backend, Database</td>
            <td><span class="status">PASS</span></td>
          </tr>

          <tr>
            <td>9</td>
            <td>Metode online</td>
            <td>online</td>
            <td>online</td>
            <td><span class="status">PASS</span></td>
          </tr>

          <tr>
            <td>9</td>
            <td>Metode offline</td>
            <td>offline</td>
            <td>offline</td>
            <td><span class="status">PASS</span></td>
          </tr>

          <tr>
            <td>10</td>
            <td>Metode hybrid</td>
            <td>hybrid</td>
            <td>hybrid</td>
            <td><span class="status">PASS</span></td>
          </tr>

          <tr>
            <td>11</td>
            <td>Paket 3 (Mahasiswa, Web Dasar)</td>
            <td>Rp 720.000</td>
            <td>Rp 720.000</td>
            <td><span class="status">PASS</span></td>
          </tr>

          <tr>
            <td>12</td>
            <td>Navigasi</td>
            <td>Beranda/Katalog/Daftar/History</td>
            <td>Beranda/Katalog/Daftar/History</td>
            <td><span class="status">PASS</span></td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
</body>
</html>