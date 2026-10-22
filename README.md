# Concorde Landing Page & Company Profile

Repositori resmi untuk website profil perusahaan dan landing page **PT Concorde Elbe Praya**.

## 📌 Tentang Perusahaan
PT CONCORDE ELBE PRAYA adalah perusahaan nasional yang bergerak di bidang:
- Penyediaan & Manajemen Fungsi SDM
- Jasa Penunjang Usaha & Operasional
- Layanan Keamanan Swasta (Security Services)
- Kebersihan Bangunan & Industri (Commercial & Industrial Cleaning)
- Layanan Pemeliharaan Fasilitas (Facility Maintenance)

## 🛠️ Teknologi yang Digunakan
- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap 5, FontAwesome
- **Backend**: PHP Native
- **Database**: MySQL / MariaDB (via XAMPP)

## 🚀 Panduan Instalasi Lokal

1. **Clone Repositori:**
   ```bash
   git clone https://github.com/SulLightAnony/concorde_landing_page.git
   ```
2. **Pindahkan ke Direktori Web Server (XAMPP):**
   Pindahkan folder projek ke dalam direktori `htdocs` (misal: `C:\xampp\htdocs\concorde_landing_page`).

3. **Impor Database:**
   - Buka `phpMyAdmin` (http://localhost/phpmyadmin)
   - Buat database baru dengan nama `app_concorde`
   - Impor file skema database dari `database/sql/app_concorde.example.sql`

4. **Konfigurasi Koneksi:**
   Sesuaikan kredensial koneksi database pada file `menus/templates/connection.php` jika diperlukan.

5. **Akses Aplikasi:**
   Buka browser dan arahkan ke:
   ```
   http://localhost/concorde_landing_page
   ```
