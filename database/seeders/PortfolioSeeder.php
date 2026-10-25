<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Experience;
use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Categories
        $webDev = Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
            'description' => 'Arsitektur backend Laravel, perancangan basis data, integrasi API, dan aplikasi web modular yang responsif.',
            'icon' => 'code',
        ]);

        $uiux = Category::create([
            'name' => 'UI/UX Design',
            'slug' => 'ui-ux-design',
            'description' => 'Riset pengguna, user persona, information architecture, wireframing, interactive prototyping, dan usability testing.',
            'icon' => 'palette',
        ]);

        // 2. Projects
        $p1 = Project::create([
            'category_id' => $webDev->id,
            'title' => 'Sistem Informasi Pemantauan Progres Skripsi',
            'slug' => 'sistem-informasi-pemantauan-progres-skripsi',
            'summary' => 'Sistem pemantauan tahapan skripsi multi-aktor dari pengajuan judul hingga yudisium dengan algoritma deteksi keaktifan bimbingan.',
            'description' => 'Aplikasi web manajemen skripsi akademik yang dirancang untuk mengorkestrasi interaksi 5 peran pengguna dalam satu siklus bimbingan yang transparan dan terukur.',
            'role' => 'Full-Stack Web Developer',
            'year' => '2024',
            'technologies' => ['Laravel', 'PHP 8', 'MySQL', 'Blade', 'Tailwind CSS', 'Agile Scrum'],
            'thumbnail' => '/images/projects/skripsi-tracker.svg',
            'problem' => 'Proses bimbingan skripsi sering menghadapi hambatan komunikasi antara mahasiswa dan dosen pembimbing. Tidak adanya media pelacakan terpusat menyulitkan Koordinator Program Studi memantau mahasiswa yang terlambat atau pasif bimbingan, serta sering memicu ketidaksinkronan riwayat revisi.',
            'objectives' => 'Membangun platform terpadu yang memfasilitasi 5 aktor (Mahasiswa, Dosen Pembimbing 1, Dosen Pembimbing 2, Kaprodi, dan Admin) dalam memantau setiap checkpoint tugas akhir, mulai dari seleksi judul, seminar proposal, revisi naskah berkala, hingga validasi berkas yudisium.',
            'my_contribution' => 'Merancang skema database relasional multi-entitas, membangun arsitektur autentikasi & autorisasi multi-role, mengembangkan modul log aktivitas bimbingan terverifikasi tanda tangan digital, serta mengimplementasikan algoritma deteksi otomatis mahasiswa yang tidak aktif bimbingan selama batas waktu tertentu.',
            'process' => 'Dikembangkan menggunakan metodologi Agile Scrum dalam 4 sprint terstruktur: penyusunan Product Backlog bersama stakeholder akademik, perancangan ERD & Flowchart 5 peran, implementasi backend MVC Laravel, dan User Acceptance Testing (UAT).',
            'verified_results' => 'Berhasil memetakan seluruh alur bimbingan skripsi untuk 5 jenis pengguna secara simultan. Fitur penandaan otomatis mahasiswa pasif bimbingan terbukti akurat dalam simulasi pengujian. Rencana integrasi sistemik dengan SISRI dan SIAKAD dipersiapkan untuk fase implementasi lanjutan kampus.',
            'demo_url' => null, // Placeholder jelas sesuai PRD, jangan mengarang URL
            'repository_url' => null,
            'figma_url' => null,
            'is_featured' => true,
            'sort_order' => 1,
        ]);

        ProjectImage::create([
            'project_id' => $p1->id,
            'image_path' => '/images/projects/skripsi-tracker.svg',
            'caption' => 'Dashboard multi-role pemantauan progres bimbingan skripsi mahasiswa.',
            'sort_order' => 1,
        ]);

        $p2 = Project::create([
            'category_id' => $webDev->id,
            'title' => 'PrintLab — Laboratorium Printing & Operational System',
            'slug' => 'printlab-lab-printing-system',
            'summary' => 'Sistem operasional layanan cetak laboratorium komputer kampus dengan kalkulasi tarif otomatis dan ekspor laporan keuangan terstruktur.',
            'description' => 'Aplikasi web internal lab komputer untuk mengotomatisasi pencatatan pemesanan print & fotokopi, verifikasi pembayaran kasir, serta pembuatan laporan berkala.',
            'role' => 'Full-Stack Web Developer',
            'year' => '2024',
            'technologies' => ['Laravel', 'Supabase', 'Tailwind CSS', 'JavaScript', 'DomPDF', 'Excel Export'],
            'thumbnail' => '/images/projects/printlab.svg',
            'problem' => 'Laboratorium komputer melayani puluhan pesanan cetak dokumen setiap harinya. Sebelum adanya sistem, asisten lab mencatat transaksi secara manual di buku kas kertas yang memicu selisih rekapitulasi, kehilangan jejak antrean file cetak, dan menghabiskan waktu berjam-jam saat tutup buku akhir bulan.',
            'objectives' => 'Menghadirkan sistem kasir laboratorium yang cepat, menghitung biaya pesanan secara otomatis berdasarkan jenis kertas/warna/halaman, menyimpan antrean file cetak di cloud, dan menghasilkan laporan rekapitulasi siap cetak.',
            'my_contribution' => 'Mengembangkan backend Laravel utuh, mengintegrasikan Supabase Storage untuk penampungan berkas cetak mahasiswa, merancang panel kasir asisten laboratorium dengan kalkulator tarif dinamis, serta mengimplementasikan modul ekspor laporan keuangan format PDF dan Excel.',
            'process' => 'Menganalisis alur layanan antrean lab bersama pengurus lab komputer, merancang antarmuka kasir minimalis berorientasi kecepatan input, mengintegrasikan cloud storage, dan melakukan uji coba operasional harian.',
            'verified_results' => 'Berhasil mendigitalisasi operasional kasir laboratorium, memangkas waktu tunggu perhitungan biaya cetak, dan mengotomatisasi pembuatan laporan bulanan asisten lab tanpa kekeliruan rekapitulasi data.',
            'demo_url' => null,
            'repository_url' => null,
            'figma_url' => null,
            'is_featured' => true,
            'sort_order' => 2,
        ]);

        ProjectImage::create([
            'project_id' => $p2->id,
            'image_path' => '/images/projects/printlab.svg',
            'caption' => 'Antarmuka kasir PrintLab dengan kalkulasi tarif dinamis dan ekspor laporan.',
            'sort_order' => 1,
        ]);

        $p3 = Project::create([
            'category_id' => $uiux->id,
            'title' => 'DEKAT — Platform Pendampingan Lansia di Madura',
            'slug' => 'dekat-pendampingan-lansia-madura',
            'summary' => 'Desain produk digital ramah usia untuk pemantauan kesehatan dan pendampingan lansia di Madura dengan skor SUS 83,0 (Excellent).',
            'description' => 'Studi kasus perancangan UI/UX berorientasi aksesibilitas tinggi untuk memfasilitasi lansia, keluarga pendamping, dan relawan kesehatan lokal.',
            'role' => 'UI/UX Researcher & Product Designer',
            'year' => '2024',
            'technologies' => ['Figma', 'Maze', 'Usability Testing', 'SUS Evaluation', 'Information Architecture'],
            'thumbnail' => '/images/projects/dekat.svg',
            'problem' => 'Banyak lansia di Madura yang tinggal berjauhan dengan anggota keluarga inti atau memiliki keterbatasan akses terhadap pendampingan kesehatan harian. Aplikasi mobile yang beredar di pasaran umumnya memiliki navigasi rumit, teks terlalu kecil, dan kontras warna yang sulit dikenali oleh pengguna lanjut usia.',
            'objectives' => 'Merancang produk digital yang inklusif dan mudah dioperasikan langsung oleh lansia maupun pendampingnya, dengan penekanan pada tombol aksi besar, visual hierarki sederhana, pesan suara/indikator darurat, dan koordinasi dengan relawan setempat.',
            'my_contribution' => 'Memimpin tahapan riset empati pengguna, menyusun 3 user persona spesifik, merancang information architecture dan user flow untuk 3 peran pengguna (Lansia, Pendamping Keluarga, Relawan), menyusun high-fidelity design system, serta memfasilitasi usability testing menggunakan platform Maze.',
            'process' => 'Mengadopsi Design Thinking (Empathize, Define, Ideate, Prototype, Test). Menghasilkan wireframe low-fidelity hingga high-fidelity prototype interaktif di Figma, lalu diuji secara terukur dengan 8 skenario tugas.',
            'verified_results' => 'Diverifikasi langsung melalui pengujian Usability Testing bersama 5 partisipan dan 8 skenario pengujian di platform Maze, menghasilkan System Usability Scale (SUS) terverifikasi sebesar 83,0 (kategori "Excellent").',
            'demo_url' => null,
            'repository_url' => null,
            'figma_url' => null,
            'is_featured' => true,
            'sort_order' => 3,
        ]);

        ProjectImage::create([
            'project_id' => $p3->id,
            'image_path' => '/images/projects/dekat.svg',
            'caption' => 'Alur antarmuka dan design system ramah aksesibilitas DEKAT.',
            'sort_order' => 1,
        ]);

        $p4 = Project::create([
            'category_id' => $uiux->id,
            'title' => 'APP KEY LAB — Mobile Key Tracking System',
            'slug' => 'app-key-lab-mobile-ui-ux',
            'summary' => 'Perancangan antarmuka aplikasi mobile peminjaman dan pemantauan kunci ruang lab komputer secara real-time dan terverifikasi.',
            'description' => 'Desain solusi mobile berbasis komponen modular untuk menghentikan insiden kehilangan atau miskoordinasi kunci fasilitas laboratorium kampus.',
            'role' => 'UI/UX Mobile Designer',
            'year' => '2024',
            'technologies' => ['Figma', 'Mobile UI/UX', 'Interactive Prototyping', 'Component System', 'User Flow'],
            'thumbnail' => '/images/projects/keylab.svg',
            'problem' => 'Laboratorium komputer kampus memiliki beberapa ruangan praktikum dengan mobilitas kunci fisik yang sangat tinggi. Ketiadaan pencatatan serah terima kunci secara digital sering menyebabkan ruangan terkunci saat jadwal praktikum tiba dan sulit melacak siapa pemegang kunci terakhir.',
            'objectives' => 'Menciptakan antarmuka aplikasi mobile yang intuitif untuk mengecek status ketersediaan ruang, melakukan reservasi peminjaman kunci lab, dan memverifikasi pengembalian dengan sistem riwayat terpusat.',
            'my_contribution' => 'Merancang alur interaksi peminjaman kunci, menyusun wireframe mobile, mendesain komponen antarmuka yang konsisten di Figma, serta membangun clickable prototype untuk validasi konsep sebelum tahap koding.',
            'process' => 'Wawancara dengan staf dan asisten lab untuk memetakan pain point harian, pembuatan sketsa antarmuka mobile, penyusunan atomic design token di Figma, dan pengujian alur interaksi bersama calon pengguna lab.',
            'verified_results' => 'Menghasilkan rancangan prototipe interaktif lengkap yang mencakup alur permohonan, status penanggung jawab kunci aktif, dan history peminjaman dengan visual hierarki yang jelas.',
            'demo_url' => null,
            'repository_url' => null,
            'figma_url' => null,
            'is_featured' => true,
            'sort_order' => 4,
        ]);

        ProjectImage::create([
            'project_id' => $p4->id,
            'image_path' => '/images/projects/keylab.svg',
            'caption' => 'Tampilan mobile UI rancangan pemantauan kunci lab real-time.',
            'sort_order' => 1,
        ]);

        // Proyek pendukung
        Project::create([
            'category_id' => $webDev->id,
            'title' => 'Web POS Mitra (Yenny Laundry & UMKM Teh Solo)',
            'slug' => 'web-pos-mitra-umkm',
            'summary' => 'Aplikasi Point of Sale berbasis web untuk mempermudah pencatatan kasir, tracking pesanan laundry, dan pembukuan omzet UMKM lokal.',
            'description' => 'Sistem kasir web adaptif untuk kebutuhan mitra usaha jasa cuci dan gerai minuman cepat saji.',
            'role' => 'Full-Stack Developer',
            'year' => '2023 - 2024',
            'technologies' => ['Laravel', 'MySQL', 'JavaScript', 'Tailwind CSS'],
            'thumbnail' => '/images/projects/pos-mitra.svg',
            'problem' => 'Mitra usaha mikro masih mencatat transaksi pelanggan menggunakan nota kertas manual yang rentan rusak atau salah kalkulasi omzet harian.',
            'objectives' => 'Menyediakan aplikasi kasir berbasis web yang ringan dan mudah digunakan pada perangkat tablet atau handphone pemilik usaha.',
            'my_contribution' => 'Membangun logika pencatatan status pakaian (proses cuci, setrika, siap ambil) untuk Yenny Laundry dan manajemen stok cup serta varian rasa untuk Teh Solo.',
            'process' => 'Melakukan observasi alur kasir mitra langsung di lokasi kerja dan merancang database teroptimasi dengan interface yang clean.',
            'verified_results' => 'Berhasil mempermudah mitra dalam melacak antrean pesanan pelanggan dan mengeliminasi kesalahan perhitungan pembukuan harian.',
            'demo_url' => null,
            'repository_url' => null,
            'figma_url' => null,
            'is_featured' => false,
            'sort_order' => 5,
        ]);

        Project::create([
            'category_id' => $webDev->id,
            'title' => 'Sistem Informasi Akademik Sekolah Berbasis Web',
            'slug' => 'sistem-informasi-akademik-sekolah',
            'summary' => 'Platform pengelolaan data guru, peserta didik, jadwal mata pelajaran, dan kalkulasi otomatis nilai rapor semester.',
            'description' => 'Aplikasi administrasi sekolah untuk menyatukan data kesiswaan dan pencatatan akademik yang sebelumnya terpisah dalam format spreadsheet.',
            'role' => 'Full-Stack Developer',
            'year' => '2023',
            'technologies' => ['Laravel', 'MySQL', 'Blade', 'Bootstrap'],
            'thumbnail' => '/images/projects/si-akademik.svg',
            'problem' => 'Proses rekapitulasi nilai rapor murid dari berbagai mata pelajaran masih dilakukan secara manual menggunakan banyak file spreadsheet terpisah.',
            'objectives' => 'Menghadirkan portal akademik terpusat bagi guru untuk menginput nilai dan menghasilkan laporan predikat siswa secara otomatis.',
            'my_contribution' => 'Mengembangkan skema database nilai siswa berjenjang, modul hak akses guru per kelas dan mata pelajaran, serta logika kalkulasi nilai akhir rapor.',
            'process' => 'Pemetaan struktur kurikulum sekolah, implementasi backend MVC Laravel, dan uji validasi input nilai bersama staf pengajar.',
            'verified_results' => 'Mendukung digitalisasi data nilai puluhan siswa per kelas dan mempercepat pembuatan rekapitulasi nilai semester.',
            'demo_url' => null,
            'repository_url' => null,
            'figma_url' => null,
            'is_featured' => false,
            'sort_order' => 6,
        ]);

        Project::create([
            'category_id' => $webDev->id,
            'title' => 'SI-Easy Letter — Sistem Surat Administrasi Kampus',
            'slug' => 'si-easy-letter-administrasi-kampus',
            'summary' => 'Sistem permohonan, alur disposisi approval, dan penerbitan surat keterangan aktif kuliah mahasiswa secara paperless.',
            'description' => 'Solusi layanan administrasi surat kampus berbasis web untuk memangkas birokrasi manual dan antrean tata usaha.',
            'role' => 'Web Developer',
            'year' => '2023',
            'technologies' => ['Laravel', 'MySQL', 'DomPDF', 'Blade', 'CSS'],
            'thumbnail' => '/images/projects/si-easy-letter.svg',
            'problem' => 'Mahasiswa harus mengantre di loket tata usaha dan menunggu persetujuan tanda tangan fisik beberapa hari untuk selembar surat keterangan aktif.',
            'objectives' => 'Mendigitalisasi formulir permohonan surat, sistem approval berjenjang bagi staf dan pejabat jurusan, serta render PDF surat resmi otomatis.',
            'my_contribution' => 'Mengembangkan alur pengajuan form online, modul approval tata usaha, dan generator surat berformat resmi dengan nomor surat otomatis.',
            'process' => 'Analisis format persuratan akademik fakultas, perancangan status verifikasi (Pending, Disetujui, Ditolak), dan pengujian generate dokumen PDF.',
            'verified_results' => 'Menyederhanakan alur birokrasi pengajuan surat mahasiswa menjadi teratur dan terlacak secara digital.',
            'demo_url' => null,
            'repository_url' => null,
            'figma_url' => null,
            'is_featured' => false,
            'sort_order' => 7,
        ]);

        // 3. Experiences
        Experience::create([
            'organization' => 'Warga Lab — Laboratorium Sistem Informasi UTM',
            'position' => 'Asisten Praktikum, Lab Administrator & Kominfo',
            'type' => 'laboratory',
            'period' => '2023 — Sekarang',
            'description' => 'Mengajar materi praktikum pemrograman dan basis data bagi mahasiswa, memelihara kelayakan infrastruktur laboratorium komputer, serta mengembangkan aplikasi penunjang operasional lab.',
            'bullet_points' => [
                'Mengampu kelas praktikum pemrograman web dan basis data dengan pendekatan studi kasus langsung.',
                'Menginisiasi dan mengembangkan aplikasi internal PrintLab untuk mendigitalisasi layanan cetak lab.',
                'Memastikan ketersediaan sarana dan prasarana perangkat lunak di lab komputer untuk perkuliahan.',
                'Mengelola publikasi kegiatan akademik serta konten edukasi divisi Kominfo laboratorium.',
            ],
            'sort_order' => 1,
        ]);

        Experience::create([
            'organization' => 'UTM TV (Universitas Trunojoyo Madura)',
            'position' => 'Web Development & Media Technical Intern',
            'type' => 'internship',
            'period' => '2024',
            'description' => 'Melaksanakan program magang dengan fokus pada pemeliharaan platform web informasi kampus dan pendukung teknis penyiaran media universitas.',
            'bullet_points' => [
                'Bertanggung jawab terhadap pemeliharaan rutin dan pembaruan konten website media UTM TV.',
                'Membantu pengoptimalan tata kelola publikasi berita kegiatan civitas akademika kampus.',
                'Berkolaborasi erat bersama tim liputan dan multimedia untuk memastikan keselarasan aset digital.',
            ],
            'sort_order' => 2,
        ]);

        Experience::create([
            'organization' => 'HIMASI (Himpunan Mahasiswa Sistem Informasi) UTM',
            'position' => 'Staff Departemen Kominfo',
            'type' => 'organization',
            'period' => '2023 — 2024',
            'description' => 'Mengelola media komunikasi organisasi, perancangan identitas visual publikasi kegiatan, dan penyebaran informasi akademik kepada seluruh mahasiswa Sistem Informasi.',
            'bullet_points' => [
                'Merancang aset visual publikasi event, workshop teknologi, dan konten media sosial resmi HIMASI.',
                'Memperkuat keterbukaan informasi program kerja himpunan melalui kanal komunikasi terpadu.',
                'Menjembatani komunikasi mahasiswa dengan program studi melalui media informasi digital.',
            ],
            'sort_order' => 3,
        ]);
    }
}
