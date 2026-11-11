# SiPerdu – Sistem Perpustakaan Terpadu (Template Praktikum)

Template proyek praktikum **Pemrograman Internet** menggunakan **Laravel 12**.
Repository ini berisi kondisi akhir **Pertemuan 10 (Laravel Fundamental)** dan menjadi titik awal untuk **Pertemuan 11 (MVC, Migration, Seeder, Eloquent)**.

Tampilan admin dan user sudah jadi, tetapi data buku masih statis (ditulis langsung di Blade). Pada Pertemuan 11 data tersebut akan diambil dari database.

## Isi Template

| Bagian | Isi |
| --- | --- |
| Routing | `routes/web.php`: halaman user dan admin dengan named route |
| Controller | `HomeController`, `Admin/DashboardController`, `Admin/BukuController` |
| Layout Blade | `layout/user.blade.php`, `layout/admin.blade.php`, `layout/sidebar-admin.blade.php` |
| View User | `user/home.blade.php`, `user/buku/katalog.blade.php` |
| View Admin | `admin/dashboard.blade.php`, `admin/data-buku.blade.php` |
| Aset | `public/assetsUser` (template Eduleb) dan `public/assetsAdmin` |

| URL | Halaman |
| --- | --- |
| `/` | Home (POV user) |
| `/katalog-buku` | Katalog Buku (POV user) |
| `/admin/dashboard` | Dashboard (POV admin) |
| `/admin/data-buku` | Data Buku (POV admin) |

## Kebutuhan

- XAMPP (Apache + MySQL)
- PHP **8.4 atau lebih baru** (lihat catatan versi PHP di bawah)
- Composer
- Git dan VS Code

## Cara Memakai Template

1. Klik tombol hijau **Use this template → Create a new repository** di halaman GitHub ini.
2. Beri nama repository kalian, misalnya `perpustakaan-nim`, lalu klik **Create repository**.
3. Clone repository kalian ke folder `htdocs`:

   ```bash
   cd C:\xampp\htdocs
   git clone https://github.com/<username>/<nama-repo>.git perpustakaan
   cd perpustakaan
   ```

4. Pasang dependency dan siapkan file `.env`:

   ```bash
   composer install
   copy .env.example .env
   php artisan key:generate
   ```

5. Nyalakan **MySQL** di XAMPP, lalu buat database bernama `perpustakaan` di phpMyAdmin.
6. Periksa bagian database di `.env` (sudah diisi untuk XAMPP bawaan):

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=perpustakaan
   DB_USERNAME=root
   DB_PASSWORD=
   ```

7. Jalankan migration bawaan dan server:

   ```bash
   php artisan migrate
   php artisan serve
   ```

8. Buka `http://127.0.0.1:8000`.

> Pengguna macOS/Linux: ganti `copy .env.example .env` dengan `cp .env.example .env`.

## Catatan Versi PHP

`composer.lock` di template ini dibuat dengan PHP 8.4. Jika `composer install` menampilkan error seperti *"requires php >=8.4.1"*, pilih salah satu:

- Perbarui XAMPP ke versi dengan PHP 8.4, atau
- Jalankan `composer update` (Composer akan memilih versi paket yang cocok dengan PHP kalian; Laravel 12 mendukung PHP 8.2 ke atas).

Cek versi PHP dengan `php -v`.

## Masalah yang Sering Terjadi

| Gejala | Solusi |
| --- | --- |
| `vendor/autoload.php` not found | Jalankan `composer install` |
| No application encryption key | Jalankan `php artisan key:generate` |
| Connection refused | Nyalakan MySQL di XAMPP |
| Unknown database 'perpustakaan' | Buat database `perpustakaan` di phpMyAdmin |
| Perubahan `.env` tidak terbaca | Jalankan `php artisan config:clear` |

## Alur Pertemuan

| Pertemuan | Materi | Status |
| --- | --- | --- |
| 10 | Laravel Fundamental: struktur folder, routing, controller, Blade, layouting | Isi template ini |
| 11 | MVC, Migration, Seeder & Factory, Model & Eloquent, koneksi `.env` | Dikerjakan saat live coding |

---

Modul Praktikum Pemrograman Internet · Pendidikan Sistem dan Teknologi Informasi · UPI Kampus Purwakarta
