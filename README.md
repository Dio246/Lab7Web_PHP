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

---

## 7. Screenshot Pengerjaan dan Hasil Praktikum

<img width="1366" height="768" alt="Screenshot (176)" src="https://github.com/user-attachments/assets/319050af-f7f3-48a8-9ec3-07177c27b9a0" />
<img width="1366" height="768" alt="Screenshot (175)" src="https://github.com/user-attachments/assets/f399462a-7ebd-48da-a17b-87de21529fd0" />
<img width="1366" height="768" alt="Screenshot (174)" src="https://github.com/user-attachments/assets/8e5fb6f5-3e8a-49d3-9195-e17aeb07248a" />
<img width="1366" height="768" alt="Screenshot (173)" src="https://github.com/user-attachments/assets/5c6664b1-453f-43c5-8558-b82b6ba41503" />
<img width="1366" height="768" alt="Screenshot (172)" src="https://github.com/user-attachments/assets/a76ce01c-95d5-4e81-9959-12566d4d34df" />
<img width="1366" height="768" alt="Screenshot (171)" src="https://github.com/user-attachments/assets/cd02ea6f-de64-43d5-969b-7cf6e5ffbb55" />
<img width="1366" height="768" alt="Screenshot (170)" src="https://github.com/user-attachments/assets/ecc21b05-d2d2-4f9b-9412-f320439a8b6b" />
<img width="1366" height="768" alt="Screenshot (169)" src="https://github.com/user-attachments/assets/7e5a4379-89d0-4223-ac11-a5072a38df5f" />
<img width="1366" height="768" alt="Screenshot (168)" src="https://github.com/user-attachments/assets/b9e052a8-d5a6-40fc-9420-93b24af19b4b" />
<img width="1366" height="768" alt="Screenshot (167)" src="https://github.com/user-attachments/assets/cc3f0620-fa15-4ed9-a540-946eaf7fd4b1" />
<img width="1366" height="768" alt="Screenshot (167) - Copy" src="https://github.com/user-attachments/assets/7b0cce44-dff8-45b4-892a-0df073c22448" />
<img width="1366" height="768" alt="Screenshot (166)" src="https://github.com/user-attachments/assets/ec1e6fb0-a6db-482b-8ca5-986f46e58de6" />
<img width="1366" height="768" alt="Screenshot (165)" src="https://github.com/user-attachments/assets/30965bdd-3836-42a6-8e96-a9cb2388e1f8" />
<img width="1366" height="768" alt="Screenshot (163)" src="https://github.com/user-attachments/assets/0aa59f1c-af6c-4c66-aa14-ec62d71f1c9d" />
<img width="1366" height="768" alt="Screenshot (160)" src="https://github.com/user-attachments/assets/880345ec-5b48-4e56-bd5c-a6e500fdda3d" />
<img width="1366" height="768" alt="Screenshot (159)" src="https://github.com/user-attachments/assets/09efa295-aa41-4c3a-9b85-cf9f29086d88" />
<img width="1366" height="768" alt="Screenshot (158)" src="https://github.com/user-attachments/assets/e509a40c-ca56-4638-94e3-189eff4a8bf1" />
<img width="1366" height="768" alt="Screenshot (157)" src="https://github.com/user-attachments/assets/ea5558f5-c332-40ff-b89a-e6c6d4973fdf" />
<img width="1366" height="768" alt="Screenshot (156)" src="https://github.com/user-attachments/assets/06137ee7-291c-4a81-8eac-bcf3480dd189" />
<img width="1366" height="768" alt="Screenshot (155)" src="https://github.com/user-attachments/assets/d3b0bcaf-16d4-4d68-beaa-66cb45da150c" />
<img width="1366" height="768" alt="Screenshot (177)" src="https://github.com/user-attachments/assets/d1809b8f-60b6-4074-8599-329fbebe7f7f" />
