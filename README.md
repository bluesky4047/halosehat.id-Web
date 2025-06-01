<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tentang Proyek Ini

Proyek ini dibangun menggunakan **Laravel 12**, sebuah framework aplikasi web dengan sintaks yang ekspresif dan elegan, serta **Tailwind CSS** untuk desain antarmuka yang modern dan responsif. Kami bertujuan untuk memberikan pengalaman pengembangan yang menyenangkan dan efisien.

Fitur utama yang didukung oleh Laravel dalam proyek ini meliputi:
- [Routing yang sederhana dan cepat](https://laravel.com/docs/routing).
- [Dependency injection container yang kuat](https://laravel.com/docs/container).
- Dukungan berbagai backend untuk [session](https://laravel.com/docs/session) dan [cache](https://laravel.com/docs/cache).
- [ORM database yang intuitif](https://laravel.com/docs/eloquent).
- [Migrasi skema database](https://laravel.com/docs/migrations).
- [Pemrosesan pekerjaan latar belakang](https://laravel.com/docs/queues).
- [Broadcasting acara secara real-time](https://laravel.com/docs/broadcasting).

## Prasyarat
- PHP >= 8.2
- Composer
- Node.js dan npm (versi terbaru direkomendasikan)
- MySQL atau database lain yang didukung
- Git

## Langkah-Langkah Instalasi

1. **Kloning Repository**
   Jalankan perintah berikut untuk mengkloning repository dan masuk ke direktori proyek:
   ```bash
   git clone https://github.com/warsom77/halosehat.id.git
   cd halosehat.id
   ```

2. **Instal Dependensi PHP**
   Instal dependensi Laravel menggunakan Composer:
   ```bash
   composer install
   ```

3. **Konfigurasi File Lingkungan**
   - Salin file `.env.example` untuk membuat file `.env`:
     ```bash
     cp .env.example .env
     ```
   - Sesuaikan file `.env` dengan kredensial database Anda (misalnya, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).
   - Buat kunci aplikasi:
     ```bash
     php artisan key:generate
     ```

4. **Jalankan Migrasi Database**
   Jalankan migrasi untuk mengatur skema database:
   ```bash
   php artisan migrate
   ```

5. **Instal Dependensi Node.js**
   Instal paket Node.js yang diperlukan:
   ```bash
   npm install
   ```

6. **Instal dan Konfigurasi Tailwind CSS**
   - Instal Tailwind CSS dan dependensinya:
     ```bash
     npm install -D tailwindcss postcss autoprefixer
     npx tailwindcss init -p
     ```
   - Perbarui file `tailwind.config.js` untuk menyertakan path ke view Laravel:
     ```javascript
     /** @type {import('tailwindcss').Config} */
     export default {
       content: [
         "./resources/**/*.blade.php",
         "./resources/**/*.js",
         "./resources/**/*.vue",
       ],
       theme: {
         extend: {},
       },
       plugins: [],
     }
     ```
   - Tambahkan direktif Tailwind ke file `resources/css/app.css`:
     ```css
     @tailwind base;
     @tailwind components;
     @tailwind utilities;
     ```

7. **Jalankan Server Pengembangan Laravel**
   Mulai server pengembangan Laravel:
   ```bash
   php artisan serve
   ```

8. **Kompilasi Tailwind CSS**
   Kompilasi dan pantau perubahan pada Tailwind CSS:
   ```bash
   npm run dev
   ```

## Mengakses Aplikasi
- Aplikasi akan tersedia di `http://localhost:8000` (atau port lain jika ditentukan).
- Pastikan proses kompilasi Tailwind CSS berjalan untuk melihat gaya yang diterapkan.

## Belajar Laravel
Laravel memiliki [dokumentasi](https://laravel.com/docs) dan pustaka tutorial video yang sangat lengkap. Anda juga bisa mencoba [Laravel Bootcamp](https://bootcamp.laravel.com) untuk membangun aplikasi Laravel dari awal, atau menonton tutorial di [Laracasts](https://laracasts.com) untuk mempelajari Laravel, PHP modern, pengujian unit, dan JavaScript.

## Pemecahan Masalah
- Jika Composer bermasalah, pastikan PHP dan Composer diperbarui.
- Jika Tailwind CSS tidak berfungsi, periksa konfigurasi `tailwind.config.js` dan `app.css`.
- Jika migrasi database gagal, verifikasi kredensial database di file `.env`.

## Kontribusi
Kami menyambut kontribusi untuk proyek ini! Silakan baca [panduan kontribusi](https://laravel.com/docs/contributions) untuk informasi lebih lanjut.

## Kode Etik
Untuk memastikan komunitas yang ramah, harap patuhi [Kode Etik](https://laravel.com/docs/contributions#code-of-conduct).

## Kerentanan Keamanan
Jika Anda menemukan kerentanan keamanan, silakan kirim email ke Taylor Otwell di [taylor@laravel.com](mailto:taylor@laravel.com). Semua masalah keamanan akan segera ditangani.

## Lisensi
Proyek ini menggunakan framework Laravel yang dilisensikan di bawah [lisensi MIT](https://opensource.org/licenses/MIT).
