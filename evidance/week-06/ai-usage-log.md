# AI Usage Log - Pertemuan 6

| **Masalah/tujuan** | **Saran AI** | **Keputusan** | **Hasil uji** |
|---|---|---|---|
| Penyamaan data kursus | Sesuaikan daftar kursus dan harga pada `index.php`, `registration.php`, `process-registration.php`, dan `loop-lab.php` agar menggunakan 3 kursus yang sama | Diterima | Web Dasar Rp300.000, PHP Dasar Rp350.000, dan Laravel Fundamental Rp500.000 digunakan secara konsisten |
| Tampilan halaman | Sesuaikan warna dan font dengan tema KursusKu tanpa mengubah struktur dan fungsi program | Diterima | Tampilan menggunakan warna Flax, Apple Green, Dark Moss Green, Golden Brown, dan Bistre |
| Navigasi pendaftaran | Atur tampilan link navigasi agar tidak menggunakan warna biru bawaan browser | Diterima | Link navigasi tampil sesuai tema KursusKu |
| Looping kursus | Gunakan `foreach` untuk menampilkan data kursus dari array | Diterima | Ketiga kursus berhasil ditampilkan tanpa menulis markup berulang |
| Minat kosong | Gunakan pengecekan array sebelum `implode()` | Diterima | Saat tidak ada minat yang dipilih, bagian Minat menampilkan “Minat belum dipilih” tanpa menghilangkan halaman hasil |
| Test matrix | Sesuaikan skenario pengujian dengan data dan fitur KursusKu | Diterima | Test matrix mencakup perhitungan, validasi, minat, metode pembelajaran, paket, dan navigasi |
| Metode pembelajaran | Uji seluruh pilihan metode pada form, yaitu online, offline, dan hybrid | Diterima | Ketiga metode berhasil dicantumkan sebagai skenario pengujian |
| Fee calculator | Sesuaikan harga Laravel Fundamental dengan harga pada sistem pendaftaran | Diterima | Harga Laravel Fundamental menjadi Rp500.000 sehingga data sesuai dengan sistem utama |