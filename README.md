# Nama  : Afzaal Abrar Hidayat
# NIM   : 240605110206
# Kelas : Pemrograman Web Teori [B]

# aplikasi-blog-240605110206 #

## Pengembangan Aplikasi Blog (Tugas UAS)

Proyek ini merupakan pengembangan lebih lanjut dari Sistem Manajemen Konten (CMS) Blog yang telah dibangun pada Modul 10. Pada tahap UAS ini, aplikasi dilengkapi dengan **Halaman Publik (Pengunjung)** berbasis framework **Laravel** yang terintegrasi dengan database `db_blog` dari CMS.

Halaman publik ini dapat diakses oleh siapa saja secara terbuka tanpa perlu melakukan proses login, dengan tampilan tema yang bersih, sederhana, konsisten, dan elegan menggunakan Bootstrap/CSS.

## Fitur Utama Halaman Pengunjung

### 1. Halaman Utama (Home Page)
* **Artikel Terbaru**: Menampilkan 5 artikel paling update yang dikelola dari CMS.
* **Widget Kategori**: Bilah samping (sidebar) yang menampilkan daftar kategori artikel.
* **Filter Kategori**: Pengunjung dapat menyaring dan menampilkan artikel berdasarkan kategori tertentu yang diklik pada widget.

### 2. Halaman Detail Artikel (Detail Page)
* **Konten Lengkap**: Menampilkan isi artikel secara utuh beserta informasi penulis dan tanggal rilis.
* **Artikel Terkait**: Bilah samping (sidebar) yang merekomendasikan 5 artikel lain dari kategori yang sama untuk meningkatkan keterbacaan.

## Teknologi yang Digunakan
* **Framework Backend**: Laravel
* **Database**: MySQL (`db_blog`)
* **Frontend**: Blade Templating, HTML5, CSS3, Bootstrap

## Fitur CMS Eksisting (Modul 10)
Sebelumnya, sistem ini telah memiliki fitur internal khusus penulis (wajib login) yang meliputi:
* Manajemen Artikel (CRUD)
* Manajemen Penulis/User (CRUD)
* Manajemen Kategori Artikel (CRUD)

---

## 💻 Langkah-langkah Menjalankan Aplikasi secara Lokal

Ikuti panduan teknis berikut untuk menjalankan proyek aplikasi blog ini di lingkungan lokal:

### 1. Persiapan Proyek
* Pastikan seluruh folder proyek UAS ini telah diunduh (*clone/download*) dan diekstrak ke komputer.
* Pastikan komputer telah terinstal **PHP (minimal versi 8.2)** dan **MySQL** (bawaan XAMPP), serta **Composer**.

### 2. Instalasi Dependensi Vendor
Buka terminal (Command Prompt/Git Bash), masuk ke direktori proyek, lalu jalankan perintah berikut untuk mengunduh pustaka pihak ketiga:
```bash
composer install
```

### 3. Konfigurasi Environment (.env)
1. Salin file `.env.example` yang ada di dalam proyek menjadi file baru bernama `.env`.
2. Buka file `.env` menggunakan kode editor, lalu sesuaikan bagian kredensial database.
*(Catatan: Sesuai prasyarat UAS, database `db_blog` beserta tabel `penulis`, `kategori_artikel`, dan `artikel` harus sudah tersedia dari data CMS Modul 10).*

### 4. Generate Application Key
Jalankan perintah berikut di terminal untuk membuat kunci keamanan aplikasi baru:
```bash
php artisan key:generate
```

### 5. Menjalankan Development Server
1. Pastikan layanan MySQL pada XAMPP Control Panel berada dalam kondisi aktif.
2. Eksekusi perintah CLI bawaan Laravel untuk menyalakan server pengembangan:
   ```bash
   php artisan serve
   ```
3. Buka browser Anda dan akses aplikasi melalui URL default berikut:
   ```text
   http://127.0.0.1:8000
   ```
