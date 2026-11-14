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

<img width="1366" height="768" alt="Screenshot (177)" src="https://github.com/user-attachments/assets/75fa0261-e70a-4060-9654-6183469342e7" />
<img width="1366" height="768" alt="Screenshot (177) - Copy" src="https://github.com/user-attachments/assets/a21e975a-2ec8-41f4-a595-99d5329bfad7" />
<img width="1366" height="768" alt="Screenshot (176)" src="https://github.com/user-attachments/assets/7cc5564a-7a20-4146-a5d5-f38905b5e74f" />
<img width="1366" height="768" alt="Screenshot (176) - Copy" src="https://github.com/user-attachments/assets/1e117574-a0b5-4018-970f-54327c635f37" />
<img width="1366" height="768" alt="Screenshot (175)" src="https://github.com/user-attachments/assets/9c70211c-e074-493e-ac78-464dce903ffa" />
<img width="1366" height="768" alt="Screenshot (175) - Copy" src="https://github.com/user-attachments/assets/679f44c5-eca2-4a36-ac67-e80b3e690660" />
<img width="1366" height="768" alt="Screenshot (174)" src="https://github.com/user-attachments/assets/56008a9e-8bd4-4529-a1bd-bc582abd2d94" />
<img width="1366" height="768" alt="Screenshot (174) - Copy" src="https://github.com/user-attachments/assets/727ec33b-6dcd-4357-8cbe-f9448bbb57e6" />
<img width="1366" height="768" alt="Screenshot (173)" src="https://github.com/user-attachments/assets/00e82795-98e0-4f8c-a23e-81aa31dc0a20" />
<img width="1366" height="768" alt="Screenshot (173) - Copy" src="https://github.com/user-attachments/assets/5433b404-0c09-4ba3-b044-7d7ccd800c7f" />
<img width="1366" height="768" alt="Screenshot (172)" src="https://github.com/user-attachments/assets/f6a3c9e7-f1c9-49c6-b57a-c33668cf2121" />
<img width="1366" height="768" alt="Screenshot (172) - Copy" src="https://github.com/user-attachments/assets/5fada5fc-fcce-4f88-bdeb-3ac30a09af0d" />
<img width="1366" height="768" alt="Screenshot (171)" src="https://github.com/user-attachments/assets/62255d83-1d5b-49bb-847a-66dc93d482d4" />
<img width="1366" height="768" alt="Screenshot (171) - Copy" src="https://github.com/user-attachments/assets/d63cac15-4d4f-4fa2-9618-710e7d2c7cd2" />
<img width="1366" height="768" alt="Screenshot (170)" src="https://github.com/user-attachments/assets/a4e9bd8e-11e5-4d95-a9ff-57dd83774530" />
<img width="1366" height="768" alt="Screenshot (170) - Copy" src="https://github.com/user-attachments/assets/d50cc3a1-d86c-4e2e-85ca-9d9e4bd363a7" />
<img width="1366" height="768" alt="Screenshot (169)" src="https://github.com/user-attachments/assets/b246257e-397b-47ba-8629-2ba38ee3b70b" />
<img width="1366" height="768" alt="Screenshot (169) - Copy" src="https://github.com/user-attachments/assets/0730fc87-e013-4727-8389-860bb652fea8" />
<img width="1366" height="768" alt="Screenshot (168)" src="https://github.com/user-attachments/assets/5f955faa-53f4-4d6a-8968-0597c7601634" />
<img width="1366" height="768" alt="Screenshot (168) - Copy" src="https://github.com/user-attachments/assets/c4dabba1-687c-4f0a-87e8-87ddda29a86c" />
<img width="1366" height="768" alt="Screenshot (167)" src="https://github.com/user-attachments/assets/d92bec9a-31f1-4fc1-9837-8d2725a23785" />
<img width="1366" height="768" alt="Screenshot (167) - Copy" src="https://github.com/user-attachments/assets/a731df9c-1940-4278-b828-d292ac50e5de" />
<img width="1366" height="768" alt="Screenshot (166)" src="https://github.com/user-attachments/assets/608099a6-b3f4-4e8e-8e7f-6103450b3aac" />
<img width="1366" height="768" alt="Screenshot (166) - Copy" src="https://github.com/user-attachments/assets/966b2e79-5451-4f64-be00-34063bb58d20" />
<img width="1366" height="768" alt="Screenshot (165)" src="https://github.com/user-attachments/assets/8a323c37-b5bc-44c8-8030-68b3eb98590e" />
<img width="1366" height="768" alt="Screenshot (165) - Copy" src="https://github.com/user-attachments/assets/f195ca77-2f39-4b3e-afdb-7eb7ad4fc3ff" />
<img width="1366" height="768" alt="Screenshot (163)" src="https://github.com/user-attachments/assets/c9cd2628-7981-44fe-adf9-5fbcce7236fb" />
<img width="1366" height="768" alt="Screenshot (163) - Copy" src="https://github.com/user-attachments/assets/5a7345a0-b60f-48f3-b8af-d31b48d246b5" />
<img width="1366" height="768" alt="Screenshot (160)" src="https://github.com/user-attachments/assets/86866df9-b856-4b79-a34a-92e137693e33" />
<img width="1366" height="768" alt="Screenshot (160) - Copy" src="https://github.com/user-attachments/assets/afb33a7c-1121-401e-9291-33c9c6a61ff4" />
<img width="1366" height="768" alt="Screenshot (159)" src="https://github.com/user-attachments/assets/9ce30f0b-68ca-44c0-808a-8aa97bd51aec" />
<img width="1366" height="768" alt="Screenshot (159) - Copy" src="https://github.com/user-attachments/assets/f2e4f94d-62ce-4ba3-9dca-89370acb6ed8" />
<img width="1366" height="768" alt="Screenshot (158)" src="https://github.com/user-attachments/assets/1195ce66-53e7-4857-82ba-fcfc7a7a47cf" />
<img width="1366" height="768" alt="Screenshot (158) - Copy" src="https://github.com/user-attachments/assets/168310cd-722a-49a5-b073-e3b08d3ed28f" />
<img width="1366" height="768" alt="Screenshot (157)" src="https://github.com/user-attachments/assets/b44bebaa-65e7-48a5-866d-6f31534193da" />
<img width="1366" height="768" alt="Screenshot (157) - Copy" src="https://github.com/user-attachments/assets/70fc9480-5e67-4843-aca0-9e480f0e7fce" />
<img width="1366" height="768" alt="Screenshot (156)" src="https://github.com/user-attachments/assets/8551cdd0-878e-47b8-9546-31f6011c73b4" />
<img width="1366" height="768" alt="Screenshot (156) - Copy" src="https://github.com/user-attachments/assets/0ea6d79a-89ba-465c-8caa-0ac4e8abd347" />
<img width="1366" height="768" alt="Screenshot (155)" src="https://github.com/user-attachments/assets/3642324d-406b-4175-b035-baf738642cf6" />
<img width="1366" height="768" alt="Screenshot (155) - Copy" src="https://github.com/user-attachments/assets/13a2c231-bf2b-483b-8efe-9bbdeebf5954" />
