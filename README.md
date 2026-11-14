# Praktikum 7: Pemrograman Server-Side PHP

* **Nama:** Dio Surya Pratama
* **NIM:** 312510484
* **Kelas:** I253C
* **Program Studi:** Teknik Informatika – Universitas Pelita Bangsa

---

## 1. Tujuan Praktikum
1. Memahami konsep dasar pemrograman *server-side* menggunakan bahasa PHP.
2. Mampu menginstal, mengonfigurasi, dan menjalankan lingkungan pengembangan web lokal (Apache HTTP Server dan PHP).
3. Mampu menerapkan sintaks dasar PHP meliputi variabel, operator, percabangan (`if-else`), perulangan (`foreach`), array, dan *function*.
4. Mampu menangani pengiriman serta pengolahan data formulir menggunakan metode `GET` dan `POST`.
5. Mampu menerapkan validasi input di sisi server (*server-side validation*) serta mengamankan tampilan output menggunakan `htmlspecialchars()`.

---

## 2. Perangkat yang Digunakan
* **Sistem Operasi:** Windows 10
* **Web Server & PHP Interpreter:** XAMPP (Apache HTTP Server & PHP)
* **Code Editor:** Visual Studio Code
* **Web Browser:** Google Chrome

---

## 3. Cara Menjalankan Server Lokal
1. Buka aplikasi **XAMPP Control Panel**.
2. Klik tombol **Start** pada baris **Apache** hingga indikator status berubah menjadi hijau (port `80, 443` aktif).
3. Pastikan folder proyek (`Lab7Web_PHP`) disimpan di dalam direktori root web server `C:\xampp\htdocs\`.
4. Buka browser dan akses alamat berikut melalui bilah URL:
   * Halaman latihan dasar: `http://localhost/Lab7Web_PHP/index.php`
   * Halaman mini project: `http://localhost/Lab7Web_PHP/miniproject/form_mahasiswa.php`
5. File `.php` harus selalu diakses melalui protokol `http://localhost/...` agar kode diproses oleh web server Apache, bukan dibuka langsung dengan klik ganda (`file:///...`).

---

## 4. Struktur File
```text
Lab7Web_PHP/
├── index.php                                       # Latihan dasar PHP, fungsi hitung luas, rata-rata nilai, format Rupiah, & pencarian GET
├── miniproject/
│   └── form_mahasiswa.php                          # Aplikasi formulir data mahasiswa (metode POST, validasi server-side, & tombol reset)
├── screenshots/                                    # Dokumentasi tangkapan layar hasil eksekusi program dan pengujian validasi
├── Jawaban_Evaluasi_Praktikum7_Dio_Surya_Pratama.pdf # Dokumen jawaban pertanyaan evaluasi praktikum
└── README.md                                       # Dokumentasi laporan praktikum

## 4. Ringkasan Hasil
Latihan Pemrograman PHP Dasar (index.php): Berhasil mengeksekusi skrip PHP pada server lokal untuk menampilkan teks dinamis, waktu server, perhitungan nilai rata-rata dari tiga komponen (Tugas, UTS, UAS) beserta predikat kelulusannya, iterasi data array mahasiswa, fitur pencarian nama pada array menggunakan parameter URL (GET), serta pembuatan function kustom hitungLuasPersegiPanjang() dan formatRupiah().

Mini Project Formulir Data Mahasiswa (form_mahasiswa.php): Berhasil membangun aplikasi formulir berbasis metode POST dengan memisahkan blok logika pemrosesan PHP di bagian atas dari struktur antarmuka HTML. Sistem memvalidasi kelengkapan seluruh kolom, memastikan NIM terdiri dari 9 digit angka, mengecek rentang semester (1–14), memverifikasi format email, menyediakan tombol Reset di sisi klien, serta menampilkan kembali ringkasan data secara aman menggunakan htmlspecialchars().

## 6. Pengujian Kasus Input (Mini Project)
A. Kasus Input Valid
Kasus Valid 1 — Data Mahasiswa Sesuai Ketentuan

Input:

Nama Lengkap: Dio Surya Pratama

NIM: 312510484

Program Studi: Teknik Informatika

Semester: 3

Email: dio.pratama@student.upb.ac.id

Hasil yang Diharapkan & Aktual: Seluruh aturan validasi terpenuhi tanpa pesan kesalahan. Sistem menampilkan kotak ringkasan data mahasiswa secara lengkap sesuai input yang dikirimkan.

Kasus Valid 2 — Batas Maksimal Semester & Pembersihan Spasi (trim)

Input:

Nama Lengkap:  Alya Rahmawati 

NIM: 312410123

Program Studi: Teknik Informatika

Semester: 14

Email: alya.rahma@gmail.com

Hasil yang Diharapkan & Aktual: Fungsi trim() menghapus spasi berlebih di awal dan akhir nama, nilai semester 14 diterima karena masih dalam rentang valid 1–14, dan ringkasan data ditampilkan tanpa error.

B. Kasus Input Tidak Valid
Kasus Tidak Valid 1 — Format NIM Mengandung Huruf dan Panjang Tidak 9 Digit

Input:

Nama Lengkap: Bima Sakti

NIM: 3125A104

Program Studi: Teknik Informatika

Semester: 3

Email: bima.sakti@gmail.com

Hasil yang Diharapkan & Aktual: Validasi gagal karena fungsi ctype_digit($nim) mendeteksi karakter huruf dan strlen($nim) tidak sama dengan 9. Ringkasan data tidak ditampilkan dan muncul pesan kesalahan:

"NIM harus berupa angka dan terdiri dari tepat 9 digit."

Kasus Tidak Valid 2 — Kolom Kosong, Semester di Luar Rentang, dan Format Email Salah

Input:

Nama Lengkap: Citra Lestari

NIM: 312510555

Program Studi: (dikosongkan)

Semester: 16

Email: citra.lestari@domain

Hasil yang Diharapkan & Aktual: Sistem menolak pengiriman data dan menampilkan seluruh daftar pesan kesalahan secara bersamaan pada kotak error:

"Program studi wajib diisi."

"Format email tidak valid."

"Semester harus berupa angka 1–14."

