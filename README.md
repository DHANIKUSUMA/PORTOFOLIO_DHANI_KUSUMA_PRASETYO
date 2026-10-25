# Portofolio Personal — Dhani Kusuma Prasetyo

Website portofolio profesional untuk **Dhani Kusuma Prasetyo** dengan positioning:
> **Web Developer yang memahami proses pengembangan produk digital dan pengalaman pengguna.**

Dibangun dengan arsitektur **Laravel (Blade)**, **Tailwind CSS**, dan filosofi desain **Future Campus** (Modern Editorial + Bento Grid).

---

## 🎨 Design System — Future Campus

Palet warna utama (design tokens):
- **Electric Indigo (`#5267FF`)**: Primary CTA, tautan aktif, highlight, status fokus.
- **Midnight Navy (`#10162B`)**: Teks utama, section kontras gelap, navbar, footer.
- **Neon Lime (`#C9FF57`)**: Aksen terarah, label kategori, indikator aktif, detail dekoratif.
- **Cloud White (`#F3F5FA`)**: Background utama dan permukaan konten yang bersih.
- **Pale Lavender (`#EAEDFF`)**: Background sekunder dan panel studi kasus.

Tipografi: **Plus Jakarta Sans** & **Inter**.

---

## 🚀 Fitur Utama & Struktur Halaman

1. **Homepage (`/`)**:
   - Hero section dengan nama, deskripsi profesional, dan 3 tombol CTA (*View Projects*, *Download CV*, *Contact Me*).
   - *Featured Projects* dalam Bento Grid interaktif.
   - *About Section* (profil dan pendekatan kerja).
   - *Skills Bento Grid* (Web Development, UI/UX Design, Tools & Workflow).
   - *Experience & Education* (Internship UTM TV, HIMASI, Warga Lab, S1 Sistem Informasi UTM).
   - *Achievements* terverifikasi (Skor SUS 83,0 DEKAT, dsb).
   - *Contact CTA Banner* dengan fitur salin alamat email interaktif.

2. **Katalog Proyek (`/projects`)**:
   - Filter dinamis kategori (*Web Development* dan *UI/UX Design*).
   - Kartu proyek responsif dengan thumbnail SVG representatif dan tag teknologi.

3. **Studi Kasus Detail (`/projects/{slug}`)**:
   - Dokumentasi terstruktur: Tantangan masalah, tujuan, kontribusi pribadi, proses pengembangan, dan hasil terverifikasi.
   - Tautan eksternal (Demo, GitHub, Figma) yang hanya tampil jika URL terverifikasi.
   - Navigasi menuju proyek lainnya.

4. **Resume (`/resume`)**:
   - Pendidikan formal & mata kuliah relevan.
   - Pengalaman magang, organisasi, dan asisten laboratorium.
   - Tombol unduh berkas CV resmi format PDF (`/resume/download`).

5. **Kontak (`/contact`)**:
   - Formulir pesan dengan validasi server-side lengkap dan feedback sukses/gagal.
   - Proteksi spam proporsional menggunakan *honeypot field*.
   - Informasi kontak langsung (Email, LinkedIn, GitHub, Domisili).

---

## 🛠️ Tech Stack

- **Backend**: Laravel 12 (PHP 8.5)
- **Frontend / Templating**: Blade Components
- **Styling**: Tailwind CSS v4 & Vanilla CSS
- **Interaksi**: Vanilla JavaScript (tanpa ketergantungan framework SPA)
- **Database**: SQLite (out-of-the-box) / MySQL ready
- **Testing**: PHPUnit / Laravel Feature Tests (11 test cases passed)

---

## 💻 Cara Menjalankan Proyek Secara Lokal

1. **Clone repositori dan masuk ke direktori**:
   ```bash
   git clone <repo-url>
   cd PORTOFOLIO_DHANI_KUSUMA_PRASETYO
   ```

2. **Pasang dependensi PHP & Node.js**:
   ```bash
   composer install
   npm install
   ```

3. **Konfigurasi Environment**:
   Salin file `.env.example` ke `.env` (jika belum ada):
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Migrasi Database & Seeding Data Portofolio**:
   ```bash
   php artisan migrate --seed
   ```

5. **Build Aset Frontend**:
   ```bash
   npm run build
   # atau untuk mode live reload:
   npm run dev
   ```

6. **Jalankan Web Server**:
   ```bash
   php artisan serve
   ```
   Buka browser Anda di `http://127.0.0.1:8000`.

7. **Menjalankan Automated Tests**:
   ```bash
   php artisan test
   ```

---

&copy; {{ date('Y') }} Dhani Kusuma Prasetyo. All rights reserved.
