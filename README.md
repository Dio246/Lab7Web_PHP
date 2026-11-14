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
`Lab7Web_PHP/
├── index.php                                       # Latihan dasar PHP, fungsi hitung luas, rata-rata nilai, format Rupiah, & pencarian GET
├── miniproject/
│   └── form_mahasiswa.php                          # Aplikasi formulir data mahasiswa (metode POST, validasi server-side, & tombol reset)
├── screenshots/                                    # Dokumentasi tangkapan layar hasil eksekusi program dan pengujian validasi
├── Jawaban_Evaluasi_Praktikum7_Dio_Surya_Pratama.pdf # Dokumen jawaban pertanyaan evaluasi praktikum
└── README.md                                       # Dokumentasi laporan praktikum`

---

## 5. Ringkasan Hasil
Latihan Pemrograman PHP Dasar (index.php): Berhasil mengeksekusi skrip PHP pada server lokal untuk menampilkan teks dinamis, waktu server, perhitungan nilai rata-rata dari tiga komponen (Tugas, UTS, UAS) beserta predikat kelulusannya, iterasi data array mahasiswa, fitur pencarian nama pada array menggunakan parameter URL (GET), serta pembuatan function kustom hitungLuasPersegiPanjang() dan formatRupiah().

Mini Project Formulir Data Mahasiswa (form_mahasiswa.php): Berhasil membangun aplikasi formulir berbasis metode POST dengan memisahkan blok logika pemrosesan PHP di bagian atas dari struktur antarmuka HTML. Sistem memvalidasi kelengkapan seluruh kolom, memastikan NIM terdiri dari 9 digit angka, mengecek rentang semester (1–14), memverifikasi format email, menyediakan tombol Reset di sisi klien, serta menampilkan kembali ringkasan data secara aman menggunakan htmlspecialchars().

---

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
```text

<img width="1366" height="768" alt="Screenshot (176)" src="https://github.com/user-attachments/assets/862d778f-99bd-4c20-b6c2-d2865d6f53b5" />
<img width="1366" height="768" alt="Screenshot (176) - Copy" src="https://github.com/user-attachments/assets/f38ff749-7601-404d-8e89-26fe8e2a811a" />
<img width="1366" height="768" alt="Screenshot (175)" src="https://github.com/user-attachments/assets/c8342504-5e4f-4678-9fab-13c8c1f5a108" />
<img width="1366" height="768" alt="Screenshot (175) - Copy" src="https://github.com/user-attachments/assets/365a964f-f95c-4805-8194-b16a975a53ac" />
<img width="1366" height="768" alt="Screenshot (174)" src="https://github.com/user-attachments/assets/4fe73db9-0ac2-4ceb-954c-5a00709c3775" />
<img width="1366" height="768" alt="Screenshot (174) - Copy" src="https://github.com/user-attachments/assets/7d2c8304-f2ad-48ae-a68c-b18f355edb3e" />
<img width="1366" height="768" alt="Screenshot (173)" src="https://github.com/user-attachments/assets/e8d2a8ae-14a1-4df7-ae42-e89dca25ec5c" />
<img width="1366" height="768" alt="Screenshot (173) - Copy" src="https://github.com/user-attachments/assets/eb733e89-03c6-482a-8c8d-faef1af730dd" />
<img width="1366" height="768" alt="Screenshot (172)" src="https://github.com/user-attachments/assets/d58b9f2d-e423-404a-8a12-b0df88cad780" />
<img width="1366" height="768" alt="Screenshot (172) - Copy" src="https://github.com/user-attachments/assets/5d77b8f5-a728-473a-ad3c-be32b6159779" />
<img width="1366" height="768" alt="Screenshot (171)" src="https://github.com/user-attachments/assets/c45599af-4a61-4998-a14d-cf830ce9ca43" />
<img width="1366" height="768" alt="Screenshot (171) - Copy" src="https://github.com/user-attachments/assets/616d45de-278b-4360-9ea3-851652b46f6a" />
<img width="1366" height="768" alt="Screenshot (170)" src="https://github.com/user-attachments/assets/498ddf3e-18bd-49ee-a6b6-698bef1a3878" />
<img width="1366" height="768" alt="Screenshot (170) - Copy" src="https://github.com/user-attachments/assets/630b6f98-2515-4c23-8ea9-48519020fa21" />
<img width="1366" height="768" alt="Screenshot (169)" src="https://github.com/user-attachments/assets/20852e5c-532e-4575-b8bd-b2d525bae47c" />
<img width="1366" height="768" alt="Screenshot (169) - Copy" src="https://github.com/user-attachments/assets/182a8b8b-bded-4a07-ba72-7d71c31a3099" />
<img width="1366" height="768" alt="Screenshot (168)" src="https://github.com/user-attachments/assets/4bcd1906-4357-4d10-8c5e-221504cbe752" />
<img width="1366" height="768" alt="Screenshot (168) - Copy" src="https://github.com/user-attachments/assets/41ff5650-9f73-4b0a-a609-d08ae2a05744" />
<img width="1366" height="768" alt="Screenshot (167)" src="https://github.com/user-attachments/assets/8cce8958-3de5-48dd-9206-359b5059f9b2" />
<img width="1366" height="768" alt="Screenshot (167) - Copy" src="https://github.com/user-attachments/assets/46ed627e-1c69-4a47-880f-e33ea824db70" />
<img width="1366" height="768" alt="Screenshot (166)" src="https://github.com/user-attachments/assets/07724a3f-0fae-409e-9125-149ea66a3d7b" />
<img width="1366" height="768" alt="Screenshot (166) - Copy" src="https://github.com/user-attachments/assets/d312af37-5fe9-465c-94ef-50ce98634fc7" />
<img width="1366" height="768" alt="Screenshot (165)" src="https://github.com/user-attachments/assets/2262cdec-bfc9-4c52-82da-426159beac6e" />
<img width="1366" height="768" alt="Screenshot (165) - Copy" src="https://github.com/user-attachments/assets/c7838aa0-d07e-417d-b78c-89b4faccfcec" />
<img width="1366" height="768" alt="Screenshot (163)" src="https://github.com/user-attachments/assets/675a945b-8f76-45df-9abe-e7925e790019" />
<img width="1366" height="768" alt="Screenshot (163) - Copy" src="https://github.com/user-attachments/assets/b7489990-c31c-4ccb-b01f-65b7dc537cec" />
<img width="1366" height="768" alt="Screenshot (160)" src="https://github.com/user-attachments/assets/d6829795-7eff-4f73-a432-d6317d782c14" />
<img width="1366" height="768" alt="Screenshot (160) - Copy" src="https://github.com/user-attachments/assets/1fbeb908-4d01-46cf-86fa-3c0ef554b519" />
<img width="1366" height="768" alt="Screenshot (159)" src="https://github.com/user-attachments/assets/8c2c2252-c5bf-4692-acd6-b67f2523ebf4" />
<img width="1366" height="768" alt="Screenshot (159) - Copy" src="https://github.com/user-attachments/assets/822af41f-0cbd-40ee-ab2e-aa0a60f822ca" />
<img width="1366" height="768" alt="Screenshot (158)" src="https://github.com/user-attachments/assets/e79b2a0e-a15e-4b9c-b35e-0f7657dc5d9b" />
<img width="1366" height="768" alt="Screenshot (158) - Copy" src="https://github.com/user-attachments/assets/9280674a-f3bc-45d5-9c4d-1d9aa28a4cf4" />
<img width="1366" height="768" alt="Screenshot (157)" src="https://github.com/user-attachments/assets/a23f9a98-3e78-4bb3-b621-8586b9fddbc1" />
<img width="1366" height="768" alt="Screenshot (157) - Copy" src="https://github.com/user-attachments/assets/73a7af22-844f-4ef8-abfa-7f589b663b86" />
<img width="1366" height="768" alt="Screenshot (156)" src="https://github.com/user-attachments/assets/b6f7b324-35cf-4be3-a1a0-4368fbb7a139" />
<img width="1366" height="768" alt="Screenshot (156) - Copy" src="https://github.com/user-attachments/assets/5bf1a986-555c-45d3-846c-8545fb35b1ac" />
<img width="1366" height="768" alt="Screenshot (155)" src="https://github.com/user-attachments/assets/c6c9deda-6e4f-473e-bd5f-b1ca40fce28a" />
<img width="1366" height="768" alt="Screenshot (155) - Copy" src="https://github.com/user-attachments/assets/996ddf3f-7d54-466a-8f9e-bdb44c57ca23" />
<img width="1366" height="768" alt="Screenshot (177)" src="https://github.com/user-attachments/assets/2bbed54a-986e-4143-815b-d46602cb8335" />
<img width="1366" height="768" alt="Screenshot (177) - Copy" src="https://github.com/user-attachments/assets/53a4df06-a882-4859-9dd9-1f9965fa0fd9" />
