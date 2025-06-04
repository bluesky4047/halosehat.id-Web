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
   - Sesuaikan file `.env` dengan kredensial database Anda, seperti:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=nama_database
     DB_USERNAME=nama_pengguna
     DB_PASSWORD=kata_sandi
     ```
   - Buat kunci aplikasi:
     ```bash
     php artisan key:generate
     ```

4. **Migrasi Database**
   - Pastikan Anda telah mengatur koneksi database dengan benar di file `.env`.
   - Jalankan perintah berikut untuk menjalankan migrasi dan mengatur skema database:
     ```bash
     php artisan migrate
     ```
   - **Penjelasan Tambahan**:
     - Perintah ini akan menjalankan semua file migrasi yang ada di direktori `database/migrations` untuk membuat tabel dan struktur database yang diperlukan.
     - Jika Anda ingin mengisi database dengan data awal (seeder), jalankan:
       ```bash
       php artisan db:seed
       ```
       Pastikan seeder sudah dikonfigurasi di `database/seeders` jika diperlukan.
     - Jika Anda ingin menghapus dan membuat ulang semua tabel, gunakan:
       ```bash
       php artisan migrate:fresh
       ```
     - Jika migrasi gagal, periksa:
       - Kredensial database di `.env` sudah benar.
       - Database sudah dibuat (misalnya, menggunakan `CREATE DATABASE nama_database;` di MySQL).
       - Server database sedang berjalan (misalnya, MySQL atau PostgreSQL).

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
   - Perbarui file `tailwind.config.js`:
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
   - Tambahkan direktif Tailwind ke `resources/css/app.css`:
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

---

## Catatan Tambahan untuk Migrasi Database
- **Rollback Migrasi**: Jika Anda perlu membatalkan migrasi terakhir, gunakan:
  ```bash
  php artisan migrate:rollback
  ```
- **Status Migrasi**: Untuk memeriksa status migrasi yang sudah dijalankan:
  ```bash
  php artisan migrate:status
  ```
- **Debugging**: Jika terjadi error, periksa log di `storage/logs/laravel.log` untuk detail lebih lanjut.
- **Database Lain**: Jika Anda menggunakan database selain MySQL (misalnya, PostgreSQL atau SQLite), pastikan driver PHP yang sesuai sudah terinstal dan dikonfigurasi di `.env`.

Jika Anda memiliki pertanyaan lebih lanjut tentang migrasi database atau langkah lainnya, silakan beri tahu!
