PRD --- Personal Portfolio Website
Dhani Kusuma Prasetyo
Versi: 1.0
Tanggal: 25 Oktober 2026
Status: Draft untuk desain dan implementasi
Stack utama: Laravel + Blade
1. Ringkasan Produk
Website portofolio pribadi untuk memperkenalkan Dhani Kusuma Prasetyo
sebagai mahasiswa Sistem Informasi yang memiliki pengalaman dalam
pengembangan web, desain UI/UX, pengelolaan website, dan pengajaran
praktikum.

Website menjadi pusat informasi profesional yang membantu recruiter, tim
engineering, tim produk, mentor, dan calon kolaborator memahami profil,
keterampilan, pengalaman, serta kontribusi melalui proyek nyata.

Positioning: Web Developer yang memahami proses pengembangan produk
digital dan pengalaman pengguna.

Portofolio perlu menyeimbangkan dua bidang utama:
- Web Development: Laravel, PHP, MySQL, pengembangan aplikasi web,
  dan pengelolaan data.
- UI/UX Design: Figma, user flow, wireframe, prototyping, dan
  usability testing.
2. Latar Belakang
CV memiliki ruang terbatas untuk memperlihatkan tampilan aplikasi,
proses perancangan, keputusan teknis, dan hasil proyek. Website
portofolio memberikan ruang untuk menyajikan bukti pekerjaan dengan
lebih visual dan terstruktur.

Isi awal website bersumber dari CV, termasuk pengalaman di UTM TV,
HIMASI, Warga Lab, serta proyek PrintLab, APP KEY LAB, DEKAT, Sistem
Informasi Pemantauan Progres Skripsi, Web POS Mitra, Sistem Informasi
Akademik Sekolah, dan SI-Easy Letter.

Informasi proyek yang belum tersedia---seperti URL demo, repository,
screenshot asli, atau metrik hasil---harus dilengkapi oleh pemilik
portofolio dan tidak boleh dibuat-buat.
3. Tujuan Produk
3.1 Tujuan utama
1. Memperkuat personal branding untuk kesempatan magang dan karier Web
   Developer.
2. Menampilkan proyek pilihan dengan konteks masalah, peran, proses,
   teknologi, dan hasil.
3. Memperlihatkan kemampuan teknis sekaligus pemahaman UI/UX.
4. Memudahkan pengunjung mengakses CV dan menghubungi pemilik
   portofolio.
5. Menyediakan struktur yang mudah dikembangkan seiring bertambahnya
   proyek.
3.2 Indikator keberhasilan
  Indikator                           Target awal
  Profil dan bidang utama mudah       Dalam 5--10 detik pertama
  dipahami                            

  Detail proyek mudah ditemukan       Maksimal 2 klik dari homepage

  Layout responsif                    Tidak ada layout rusak pada mobile,
                                      tablet, dan desktop

  CV                                  Bisa dibuka atau diunduh

  Tautan kontak                       Email dan profil sosial yang
                                      ditampilkan dapat diakses

  Performa                            Mengupayakan skor Lighthouse 90+;
                                  diverifikasi saat pengujian
Target tersebut adalah sasaran pengembangan, bukan hasil pengukuran yang
telah dicapai.
4. Target Pengguna
  Persona                             Kebutuhan utama
  Recruiter / HR                      Memahami profil, skill, pengalaman,
                                      dan kecocokan kandidat

  Engineering Lead                    Menilai teknologi, kontribusi, dan
                                      kualitas proyek

  Product / UI/UX Team                Melihat proses desain, prototipe,
                                      dan hasil pengujian

  Dosen / Mentor                      Meninjau perkembangan kompetensi
                                      dan proyek

  Calon kolaborator                   Memahami minat profesional dan
                                  menemukan kontak
5. Arah Desain: Future Campus
5.1 Konsep
Future Campus memadukan nuansa teknologi dengan karakter kampus yang
dinamis. Elemen futuristik menjadi identitas visual, sedangkan struktur
layout dan tipografi tetap mengutamakan keterbacaan.

Arah visual yang disarankan adalah modern, teknologis, berani, dan
terstruktur. Gunakan warna aksen secara terarah, grid modular untuk
proyek, garis tipis sebagai pemisah, serta detail visual yang
terinspirasi antarmuka digital. Hindari efek glow, gradien, atau animasi
berlebihan yang mengurangi keterbacaan.
5.2 Palet warna
Gunakan palet berikut sebagai design token utama.
  Token                   Hex                     Penggunaan
  Electric Indigo         #5267FF               Warna utama, CTA,
                                                  tautan aktif,
                                                  highlight, elemen
                                                  interaktif

  Midnight Navy           #10162B               Latar gelap,
                                                  navbar/footer gelap,
                                                  kartu dan blok kontras

  Neon Lime               #C9FF57               Aksen berani, label
                                                  kategori, indikator
                                                  aktif, detail dekoratif

  Cloud White             #F3F5FA               Latar terang, permukaan
                                                  kartu, area konten dan
                                                  formulir

  Pale Lavender           #EAEDFF               Latar sekunder, panel
                                                  studi kasus, hover atau
                                              blok pendukung
Aturan pemakaian warna:
- Jadikan #F3F5FA sebagai latar utama halaman agar konten tetap
  mudah dibaca.
- Gunakan #10162B untuk teks utama dan area gelap.
- Gunakan #5267FF untuk tombol primer, link, fokus input, dan elemen
  yang perlu menarik perhatian.
- Gunakan #C9FF57 secara hemat sebagai aksen; jangan menjadikannya
  latar panjang di belakang teks kecil.
- Gunakan #EAEDFF sebagai latar sekunder yang lembut.
- Periksa kontras warna untuk teks, tombol, dan status interaktif.
  Jika kontras tidak cukup, gunakan pasangan warna alternatif dari
  token yang sama, bukan memaksakan warna aksen.
5.3 Tipografi dan bentuk
- Font rekomendasi: Inter atau Plus Jakarta Sans.
- Heading: tegas, relatif besar, dengan hierarki yang jelas.
- Body text: nyaman dibaca, line-height longgar, dan lebar baris
  terkendali.
- Radius: 12--20 px untuk kartu; tombol bisa menggunakan radius
  sedang.
- Border: tipis dan lembut; gunakan garis untuk memperjelas
  struktur.
- Animasi: transisi hover dan reveal ringan; hormati preferensi
  prefers-reduced-motion.
- Ikon: satu keluarga ikon konsisten, misalnya Lucide.
5.4 Komposisi halaman
Rekomendasi utama adalah Minimalist Editorial + Bento Grid:
- Editorial untuk hero, about, pengalaman, dan teks studi kasus.
- Bento Grid untuk ringkasan skill, statistik yang benar-benar
  terverifikasi, serta proyek unggulan.
- Screenshot aplikasi asli menjadi elemen visual utama.
- Hindari menampilkan mockup referensi sebagai hasil karya asli.
6. Sitemap
/
├── /projects
│   └── /projects/{slug}
├── /resume
└── /contact
Deskripsi halaman
- Home (/): hero, proyek unggulan, ringkasan profil, skill,
  pengalaman, dan CTA kontak.
- Projects (/projects): seluruh proyek dengan filter kategori.
- Project detail (/projects/{slug}): studi kasus satu proyek.
- Resume (/resume): pendidikan, pengalaman, pencapaian, dan
  akses CV.
- Contact (/contact): informasi kontak dan formulir pesan.
Untuk MVP, halaman Home dapat menjadi landing page utama. Halaman detail
proyek tetap direkomendasikan agar setiap proyek dapat dibagikan sebagai
tautan tersendiri.
7. Kebutuhan Fungsional
FR-01 --- Homepage
- Menampilkan nama, bidang utama, dan ringkasan profesional.
- Menyediakan CTA View Projects, Download CV, dan Contact
  Me.
- Menampilkan proyek unggulan.
- Menampilkan ringkasan skill, pengalaman, dan pendidikan.
- Memiliki footer berisi kontak dan tautan sosial.
FR-02 --- Project showcase
- Menampilkan daftar proyek dalam kartu responsif.
- Menyediakan filter berdasarkan kategori, minimal Web Development dan
  UI/UX Design.
- Setiap kartu berisi judul, ringkasan, kategori, teknologi utama, dan
  thumbnail.
- Kartu mengarah ke detail proyek.
- Tombol demo dan repository hanya ditampilkan jika URL tersedia dan
  valid.
FR-03 --- Project detail / case study
Struktur detail proyek:
1. Judul dan ringkasan.
2. Kategori, tahun, peran, dan teknologi.
3. Latar belakang atau masalah.
4. Tujuan dan ruang lingkup.
5. Kontribusi pribadi.
6. Proses pengembangan atau desain.
7. Screenshot, wireframe, atau prototipe asli.
8. Hasil atau pembelajaran yang dapat dibuktikan.
9. Tautan demo, repository, atau Figma jika tersedia.
10. Navigasi ke proyek lain.
Untuk proyek UI/UX, tampilkan artefak seperti persona, user flow,
wireframe, prototipe, dan hasil usability testing bila tersedia. Untuk
proyek web, tampilkan fitur utama, struktur sistem, dan screenshot
aplikasi.
FR-04 --- About, experience, dan education
- Menampilkan ringkasan profil.
- Menampilkan pengalaman secara kronologis.
- Menampilkan pendidikan dan mata kuliah relevan.
- Menampilkan pengalaman asisten praktikum serta tanggung jawab
  organisasi.
- Memisahkan pengalaman kerja, organisasi, pendidikan, dan pencapaian
  agar mudah dipindai.
FR-05 --- Resume
- Menyediakan CV PDF yang dapat dilihat atau diunduh.
- Tombol unduh menggunakan file CV terbaru yang telah disetujui
  pemilik.
- Menampilkan ringkasan pengalaman di halaman web agar pengunjung
  tidak harus mengunduh CV untuk memahami profil.
FR-06 --- Contact
- Menampilkan email, LinkedIn, dan GitHub jika profilnya tersedia.
- Menyediakan formulir nama, email, subjek, dan pesan.
- Memvalidasi input di sisi server.
- Menampilkan status pengiriman berhasil atau gagal.
- Melindungi formulir dari spam dan penyalahgunaan.
FR-07 --- Admin CMS (opsional, fase lanjutan)
- Login administrator.
- CRUD proyek dan kategori.
- Pengelolaan thumbnail, galeri, deskripsi, dan URL eksternal.
- Pengelolaan pengalaman dan pencapaian.
- Status draft/published.
- Validasi tipe dan ukuran file upload.
8. Konten dan Prioritas Proyek
Urutan berikut merupakan rekomendasi kurasi berdasarkan kekuatan cerita
proyek untuk portofolio, bukan klaim peringkat prestasi.
Featured project 1 --- Sistem Informasi Pemantauan Progres Skripsi
Teknologi/konteks: Laravel, Agile Scrum.

Poin yang ditampilkan:
- Sistem untuk lima aktor: mahasiswa, dua dosen pembimbing,
  koordinator program studi, dan admin.
- Pelacakan tahapan skripsi dari pengajuan judul hingga yudisium.
- Penandaan otomatis mahasiswa yang tidak aktif bimbingan.
- Rencana integrasi dengan SISRI dan SIAKAD.
Bedakan fitur yang telah diimplementasikan dengan rencana integrasi.
Jangan menyebut integrasi sudah berjalan jika belum terverifikasi.
Featured project 2 --- PrintLab
Teknologi: Laravel, Supabase, GitHub, Vercel (sesuai CV).

Poin yang ditampilkan:
- Pengelolaan pesanan print dan fotokopi di laboratorium.
- Ekspor laporan PDF dan Excel.
- Halaman admin untuk tarif dan verifikasi pesanan.
Featured project 3 --- DEKAT
Fokus: UI/UX, Figma, usability testing, Maze.

Poin yang ditampilkan:
- Platform pendampingan lansia di Madura.
- Alur untuk tiga peran pengguna.
- Persona, arsitektur informasi, user flow, wireframe, dan prototipe.
- Pengujian yang tercantum dalam CV: 5 partisipan, 8 skenario tugas,
  skor SUS 83,0.
Featured project 4 --- APP KEY LAB
Fokus: UI/UX dan Figma.

Poin yang ditampilkan:
- Aplikasi mobile untuk mencatat dan menelusuri keberadaan pengguna
  laboratorium.
- Peran dalam perancangan alur pengguna dan antarmuka.
Proyek pendukung
- Web POS Mitra: Yenny Laundry dan UMKM Teh Solo.
- Sistem Informasi Akademik Sekolah berbasis web.
- SI-Easy Letter --- Sistem Surat Administrasi Kampus.
Konten yang perlu dilengkapi pemilik: screenshot asli, URL demo,
repository, URL Figma, periode pengerjaan, kontribusi individu, serta
hasil terukur jika tersedia.
9. User Flow
Pengunjung membuka homepage
        |
        v
Melihat hero dan ringkasan profil
        |
        v
Menjelajahi proyek unggulan
        |
        +------> Membuka detail proyek
        |              |
        |              v
        |       Melihat proses dan hasil
        |
        +------> Membuka CV / Resume
        |
        v
Menghubungi melalui email atau formulir
10. Tech Stack dan Arsitektur
  Layer                   Pilihan                 Peran
  Backend                 Laravel                 Routing, controller,
                                                  validasi, akses data

  Template                Blade                   Layout, komponen, dan
                                                  rendering HTML

  Styling                 Tailwind CSS            Design system dan
                                                  responsive layout

  Interaksi               JavaScript ringan       Filter, menu mobile,
                                                  dan interaksi UI

  Database                MySQL                   Data proyek, kategori,
                                                  pengalaman, pesan

  Ikon                    Lucide atau Heroicons   Ikon antarmuka

  Prototyping             Figma                   Wireframe dan desain
                                                  visual

  Version control         Git dan GitHub          Riwayat kode dan
                                                  kolaborasi

  Deployment              Hosting yang mendukung  Publikasi aplikasi
                      Laravel                 
Tidak perlu menambahkan React atau Vue untuk MVP. Laravel Blade dan
JavaScript ringan cukup untuk kebutuhan website portofolio ini.
Struktur direktori yang disarankan
app/
├── Http/Controllers/
│   ├── HomeController.php
│   ├── ProjectController.php
│   ├── ResumeController.php
│   └── ContactController.php
└── Models/
    ├── Project.php
    ├── Category.php
    ├── ProjectImage.php
    ├── Experience.php
    └── ContactMessage.php

resources/
├── views/
│   ├── layouts/app.blade.php
│   ├── components/
│   │   ├── navbar.blade.php
│   │   ├── footer.blade.php
│   │   ├── project-card.blade.php
│   │   └── section-title.blade.php
│   └── pages/
│       ├── home.blade.php
│       ├── projects/index.blade.php
│       ├── projects/show.blade.php
│       ├── resume.blade.php
│       └── contact.blade.php
└── css/app.css

routes/web.php
11. Rancangan Database (untuk CMS)
Database dinamis direkomendasikan jika pemilik ingin mengelola konten
tanpa mengubah kode. Untuk MVP yang lebih cepat, konten dapat
didefinisikan secara statis terlebih dahulu.
categories
- id
- name
- slug
projects
- id
- category_id
- title
- slug
- summary
- description
- role
- year
- technologies atau relasi tabel teknologi
- thumbnail
- demo_url (nullable)
- repository_url (nullable)
- figma_url (nullable)
- is_featured
- status
- published_at (nullable)
- timestamps
project_images
- id
- project_id
- image_path
- caption (nullable)
- sort_order
experiences
- id
- organization
- position
- description
- start_date
- end_date (nullable)
- timestamps
contact_messages
- id
- name
- email
- subject
- message
- read_at (nullable)
- timestamps
Relasi: satu kategori memiliki banyak proyek; satu proyek memiliki
banyak gambar. Jika CMS dibuat, gunakan autentikasi administrator dan
kebijakan akses yang ketat.
12. Acceptance Criteria
  ID                      Kriteria penerimaan     Prioritas
  AC-01                   Hero menampilkan nama,  Must
                          positioning, dan CTA    

  AC-02                   Pengunjung dapat        Must
                          melihat daftar dan
                          detail proyek           

  AC-03                   Filter kategori bekerja Must
                          dan menampilkan hasil
                          yang sesuai             

  AC-04                   Layout bekerja pada     Must
                          mobile, tablet, dan
                          desktop                 

  AC-05                   CV PDF dapat dibuka     Must
                          atau diunduh            

  AC-06                   Form kontak memvalidasi Must
                          input dan memberi
                          status pengiriman       

  AC-07                   Semua tautan eksternal  Must
                          yang ditampilkan valid  

  AC-08                   Gambar memiliki alt     Must
                          text dan ukuran
                          teroptimasi             

  AC-09                   Admin dapat mengelola   Should, jika CMS dibuat
                          konten proyek           

  AC-10                   Dark mode tersedia      Could

  AC-11                   Animasi tambahan        Could
                          tersedia tanpa
                          mengganggu
                      aksesibilitas           
13. Non-functional Requirements
- Responsivitas: tidak ada overflow horizontal yang tidak
  disengaja.
- Aksesibilitas: struktur heading semantik, navigasi keyboard,
  label form, alt text, dan kontras memadai.
- Keamanan: validasi server-side, proteksi CSRF, escaping output
  Blade, serta pembatasan upload.
- SEO: title dan meta description unik, slug yang mudah dibaca,
  Open Graph, dan sitemap bila diperlukan.
- Performa: optimasi gambar, lazy loading untuk gambar di bawah
  fold, dan JavaScript seperlunya.
- Maintainability: komponen Blade reusable, penamaan konsisten,
  dan konfigurasi yang tidak menaruh rahasia di source code.
- Privasi: hanya publikasikan informasi kontak yang memang
  disetujui untuk ditampilkan.
14. Scope dan Prioritas Rilis
MVP --- wajib untuk rilis awal
- Homepage responsif.
- About, skill, education, dan experience.
- Project list dan project detail.
- Filter kategori proyek.
- Download CV.
- Tautan kontak dan sosial.
- SEO dasar dan pengujian lintas perangkat.
Fase lanjutan
- Admin CMS.
- Form kontak dengan penyimpanan database dan/atau email.
- Dark mode.
- Analytics dengan memperhatikan privasi.
- Pengelolaan konten bilingual.
- Animasi dan interaksi tambahan.
15. Tahapan Implementasi
  Tahap                   Pekerjaan               Output
  1. Persiapan           Memeriksa CV, aset,     Konten terverifikasi
                          screenshot, link, dan
                          copywriting             

  2. Desain              Sitemap, wireframe,     UI design
                          design tokens, dan
                          desain responsif di
                          Figma                   

  3. Setup               Membuat proyek Laravel, Fondasi aplikasi
                          layout Blade, route,
                          dan komponen            

  4. Implementasi        Membuat homepage,       MVP fungsional
                          daftar proyek, detail,
                          resume, dan kontak      

  5. Integrasi           Menambahkan database    Konten dinamis
                          dan CMS jika termasuk
                          scope                   

  6. QA                  Uji responsivitas,      Daftar perbaikan
                          form, tautan,
                          aksesibilitas, dan
                          performa                

  7. Deployment          Konfigurasi hosting,    Website publik
                          domain, HTTPS, dan
                      environment             
Estimasi awal MVP adalah 1--2 minggu pengerjaan mandiri, bergantung pada
kesiapan konten, aset, dan pengalaman implementasi.
16. Risiko dan Mitigasi
  Risiko                              Mitigasi
  Screenshot proyek belum tersedia    Buat daftar aset yang dibutuhkan
                                      dan gunakan placeholder yang jelas
                                      selama pengembangan

  Link demo atau repository tidak     Sembunyikan CTA terkait sampai link
  tersedia                            terverifikasi

  Informasi proyek terlalu panjang    Gunakan ringkasan pada kartu dan
                                      studi kasus terstruktur di halaman
                                      detail

  Aksen neon mengurangi keterbacaan   Gunakan lime untuk elemen pendek
                                      dan periksa kontras

  Scope membesar karena CMS           Rilis MVP statis terlebih dahulu;
                                      CMS masuk fase berikutnya
  Klaim hasil proyek tidak            Cantumkan hanya hasil dan metrik
  terverifikasi                       yang dapat dibuktikan
17. Hal yang Perlu Dikonfirmasi
Sebelum desain final dan implementasi:
- [ ] Screenshot asli atau tautan Figma untuk tiap proyek.
- [ ] Link GitHub dan demo yang boleh dipublikasikan.
- [ ] Kontribusi pribadi dan kontribusi tim pada tiap proyek.
- [ ] CV PDF final yang akan diunduh.
- [ ] Email dan profil sosial yang ingin ditampilkan.
- [ ] Apakah website cukup statis untuk MVP atau langsung memerlukan
  CMS.
- [ ] Apakah konten hanya berbahasa Inggris, Indonesia, atau
  bilingual.
18. Definisi Selesai
MVP dianggap selesai ketika seluruh halaman inti tersedia, konten telah
diperiksa, proyek unggulan memiliki visual dan deskripsi yang benar,
navigasi serta CTA berfungsi, tampilan responsif telah diuji, CV dapat
diunduh, dan website siap dipublikasikan melalui hosting yang mendukung
Laravel.
Catatan sumber: profil, pengalaman, pendidikan, proyek, teknologi,
dan pencapaian dalam dokumen ini disusun berdasarkan CV yang diberikan.
Konsep desain Future Campus dan spesifikasi teknis merupakan rekomendasi
untuk pengembangan portofolio, bukan informasi yang diklaim berasal dari
CV.