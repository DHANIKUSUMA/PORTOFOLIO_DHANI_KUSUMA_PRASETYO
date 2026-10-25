@extends('layouts.app')

@section('title', 'Dhani Kusuma Prasetyo — Web Developer & UI/UX Designer')
@section('meta_description', 'Portofolio Dhani Kusuma Prasetyo: Web Developer spesialis Laravel dan UI/UX Designer berbasis Figma & Usability Testing.')

@section('content')
    {{-- 1. HERO SECTION --}}
    <section class="relative overflow-hidden bg-[#10162B] text-white pt-16 pb-24 lg:pt-24 lg:pb-32 future-dark-grid border-b border-[#242E54]">
        <!-- Decorative Ambient Glows -->
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-[#5267FF]/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute top-1/2 -right-24 w-96 h-96 bg-[#C9FF57]/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Text Content Hero (7 cols) -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="inline-flex items-center space-x-2 px-3 py-1.5 rounded-full bg-[#171F3B] border border-[#242E54]">
                        <span class="w-2 h-2 rounded-full bg-[#C9FF57] animate-pulse"></span>
                        <span class="text-xs font-semibold text-[#EAEDFF]">
                            Mahasiswa Sistem Informasi • UTM
                        </span>
                    </div>

                    <div class="space-y-3">
                        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-[1.15]">
                            Dhani Kusuma <br class="hidden sm:inline">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-[#EAEDFF] to-[#C9FF57]">
                                Prasetyo
                            </span>
                        </h1>
                        <p class="text-lg sm:text-xl font-medium text-[#C9FF57]">
                            Web Developer yang memahami proses pengembangan produk digital &amp; pengalaman pengguna.
                        </p>
                    </div>

                    <p class="text-sm sm:text-base text-[#8E9CBF] leading-relaxed max-w-xl">
                        "Building useful digital products, one idea at a time." <br>
                        Saya membangun aplikasi web yang terstruktur dan scalable menggunakan <strong>Laravel &amp; MySQL</strong>, serta merancang antarmuka digital yang intuitif dan teruji aksesibilitasnya menggunakan <strong>Figma</strong>.
                    </p>

                    <!-- CTAs Required: View Projects, Download CV, Contact Me -->
                    <div class="pt-2 flex flex-wrap gap-3 sm:gap-4 items-center">
                        <a href="{{ route('projects.index') }}" 
                           class="inline-flex items-center justify-center px-6 py-3.5 rounded-xl text-sm font-bold text-white bg-[#5267FF] hover:bg-[#3F52E3] transition-all duration-200 shadow-lg shadow-[#5267FF]/25 hover:shadow-xl hover:-translate-y-0.5">
                            <span>Lihat Proyek Pilihan</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>

                        <a href="{{ route('resume.download') }}" 
                           class="inline-flex items-center justify-center px-6 py-3.5 rounded-xl text-sm font-bold text-[#10162B] bg-[#C9FF57] hover:bg-[#A6DE30] transition-all duration-200 shadow-md hover:-translate-y-0.5">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                            </svg>
                            <span>Unduh CV</span>
                        </a>

                        <a href="{{ route('contact.index') }}" 
                           class="inline-flex items-center justify-center px-5 py-3.5 rounded-xl text-sm font-semibold text-[#EAEDFF] bg-[#171F3B] hover:bg-[#202C55] border border-[#242E54] transition-colors">
                            <span>Hubungi Saya</span>
                        </a>
                    </div>

                    <!-- Quick Verified Highlights -->
                    <div class="pt-6 grid grid-cols-3 gap-4 border-t border-[#242E54]/80 max-w-lg">
                        <div>
                            <span class="block text-2xl font-extrabold text-white">7+</span>
                            <span class="text-xs text-[#8E9CBF]">Proyek Nyata</span>
                        </div>
                        <div>
                            <span class="block text-2xl font-extrabold text-[#C9FF57]">83.0</span>
                            <span class="text-xs text-[#8E9CBF]">Skor SUS DEKAT</span>
                        </div>
                        <div>
                            <span class="block text-2xl font-extrabold text-white">2+ Thn</span>
                            <span class="text-xs text-[#8E9CBF]">Asisten Lab UTM</span>
                        </div>
                    </div>
                </div>

                <!-- Bento Hero Visual (5 cols) -->
                <div class="lg:col-span-5">
                    <div class="bg-[#171F3B] border border-[#242E54] rounded-2xl p-6 shadow-2xl relative">
                        <!-- Code & Design Badge Header -->
                        <div class="flex items-center justify-between pb-4 border-b border-[#242E54]">
                            <div class="flex space-x-2">
                                <span class="w-3 h-3 rounded-full bg-[#FF5F56]"></span>
                                <span class="w-3 h-3 rounded-full bg-[#FFBD2E]"></span>
                                <span class="w-3 h-3 rounded-full bg-[#27C93F]"></span>
                            </div>
                            <span class="text-xs font-mono text-[#8E9CBF]">stack-orchestration.php</span>
                        </div>

                        <!-- Two Pillars Cards -->
                        <div class="py-5 space-y-4">
                            <!-- Pillar 1: Web Development -->
                            <div class="p-4 rounded-xl bg-[#10162B] border border-[#242E54] space-y-2">
                                <div class="flex items-center justify-between">
                                    <span class="text-xs font-bold text-[#5267FF] uppercase tracking-wider">Backend &amp; Web</span>
                                    <span class="text-[10px] px-2 py-0.5 rounded bg-[#171F3B] text-[#C9FF57]">Laravel Core</span>
                                </div>
                                <h4 class="text-sm font-bold text-white">Arsitektur MVC &amp; Basis Data Relasional</h4>
                                <p class="text-xs text-[#8E9CBF]">
                                    Pengembangan alur bisnis kompleks (multi-role auth, cron alerts, rekap transaksi, migrasi terstruktur).
                                </p>
                            </div>

                            <!-- Pillar 2: UI/UX Design -->
                            <div class="p-4 rounded-xl bg-[#10162B] border border-[#242E54] space-y-2">
                                <div class="flex items-center justify-between">
                                    <span class="text-xs font-bold text-[#C9FF57] uppercase tracking-wider">Product &amp; UI/UX</span>
                                    <span class="text-[10px] px-2 py-0.5 rounded bg-[#171F3B] text-[#EAEDFF]">Figma &amp; Maze</span>
                                </div>
                                <h4 class="text-sm font-bold text-white">Desain Aksesibilitas &amp; Evaluasi SUS</h4>
                                <p class="text-xs text-[#8E9CBF]">
                                    Riset empiris pengguna, perancangan persona, user flow, hingga validasi prototipe dengan System Usability Scale.
                                </p>
                            </div>
                        </div>

                        <!-- Footer Pill -->
                        <div class="pt-3 border-t border-[#242E54] flex items-center justify-between text-xs text-[#8E9CBF]">
                            <span>Lokasi: Bangkalan / Jatim</span>
                            <span class="text-[#C9FF57] font-semibold">● Open to collaborate</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 2. FEATURED PROJECTS SECTION --}}
    <section class="py-20 lg:py-28 bg-[#F3F5FA] future-grid" id="featured-projects">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <x-section-title 
                    badge="Kurasi Proyek" 
                    title="Proyek Pilihan &amp; Studi Kasus" 
                    subtitle="Menyeimbangkan kapabilitas rekayasa perangkat lunak backend dengan perancangan antarmuka pengguna yang berorientasi data riil."
                />
                <a href="{{ route('projects.index') }}" 
                   class="inline-flex items-center text-sm font-bold text-[#5267FF] hover:text-[#3F52E3] mt-2 md:mt-0 group">
                    <span>Lihat Seluruh Proyek ({{ $featuredProjects->count() }}+)</span>
                    <svg class="w-4 h-4 ml-1.5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>

            <!-- Bento Grid Featured Projects -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($featuredProjects as $project)
                    <x-project-card :project="$project" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- 3. ABOUT SECTION --}}
    <section class="py-20 bg-white border-y border-[#D8DCFF]" id="about">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-5 space-y-6">
                    <x-section-title 
                        badge="Tentang Saya" 
                        title="Menggabungkan Logika Teknis dengan Empati Pengguna" 
                        subtitle="Membangun solusi perangkat lunak yang tidak hanya berjalan stabil di server, tetapi juga ramah dan memuaskan saat digunakan manusia."
                    />

                    <div class="space-y-4 text-sm sm:text-base text-[#556080] leading-relaxed">
                        <p>
                            Halo! Saya <strong>Dhani Kusuma Prasetyo</strong>, mahasiswa S1 Sistem Informasi di <strong>Universitas Trunojoyo Madura</strong>. Perjalanan saya di dunia teknologi berfokus pada dua disiplin yang saling melengkapi: rekayasa backend web dengan <strong>Laravel</strong> dan perancangan pengalaman produk dengan <strong>Figma</strong>.
                        </p>
                        <p>
                            Sebagai asisten praktikum dan administrator laboratorium komputer kampus, saya terbiasa membimbing puluhan mahasiswa dalam memecahkan masalah pemrograman serta membangun sistem operasional nyata seperti <strong>PrintLab</strong>. Di sisi perancangan UI/UX, saya membuktikan pendekatan berbasis riset pada proyek <strong>DEKAT</strong> yang meraih skor SUS 83,0 (kategori Excellent).
                        </p>
                    </div>

                    <div class="pt-2">
                        <a href="{{ route('resume.index') }}" 
                           class="inline-flex items-center text-sm font-bold text-[#5267FF] hover:underline">
                            <span>Pelajari riwayat pendidikan &amp; organisasi lengkap</span>
                            <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Bento Feature Cards (7 cols) -->
                <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div class="p-6 rounded-2xl bg-[#F3F5FA] border border-[#D8DCFF] space-y-3">
                        <div class="w-10 h-10 rounded-xl bg-[#5267FF] text-white flex items-center justify-center font-bold">
                            01
                        </div>
                        <h4 class="text-base font-bold text-[#10162B]">Web Engineering</h4>
                        <p class="text-xs text-[#556080] leading-relaxed">
                            Membangun sistem berbasis Laravel dengan query database teroptimasi, autentikasi multi-role, validasi ketat, serta integrasi REST API.
                        </p>
                    </div>

                    <div class="p-6 rounded-2xl bg-[#F3F5FA] border border-[#D8DCFF] space-y-3">
                        <div class="w-10 h-10 rounded-xl bg-[#10162B] text-[#C9FF57] flex items-center justify-center font-bold">
                            02
                        </div>
                        <h4 class="text-base font-bold text-[#10162B]">UI/UX &amp; Usability</h4>
                        <p class="text-xs text-[#556080] leading-relaxed">
                            Menjalankan proses user research, menyusun arsitektur informasi, wireframing, interactive prototyping, dan pengujian empiris (SUS / Maze).
                        </p>
                    </div>

                    <div class="p-6 rounded-2xl bg-[#F3F5FA] border border-[#D8DCFF] space-y-3">
                        <div class="w-10 h-10 rounded-xl bg-[#EAEDFF] text-[#5267FF] border border-[#D8DCFF] flex items-center justify-center font-bold">
                            03
                        </div>
                        <h4 class="text-base font-bold text-[#10162B]">Collaboration &amp; Agile</h4>
                        <p class="text-xs text-[#556080] leading-relaxed">
                            Terbiasa bekerja dalam metodologi Agile Scrum, berkoordinasi dengan tim lintas fungsi, dan disiplin dalam version control Git.
                        </p>
                    </div>

                    <div class="p-6 rounded-2xl bg-[#10162B] text-white border border-[#242E54] space-y-3">
                        <div class="w-10 h-10 rounded-xl bg-[#C9FF57] text-[#10162B] flex items-center justify-center font-bold">
                            04
                        </div>
                        <h4 class="text-base font-bold text-white">Mentorship &amp; Lab</h4>
                        <p class="text-xs text-[#8E9CBF] leading-relaxed">
                            Mengampu kelas praktikum coding dan mengelola fasilitas komputasi lab, mengasah kemampuan komunikasi dan pemecahan masalah teknis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 4. SKILLS BENTO GRID --}}
    <section class="py-20 bg-[#F3F5FA]" id="skills">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-title 
                alignment="center"
                badge="Kompetensi Teknis" 
                title="Bento Grid Keahlian &amp; Perangkat" 
                subtitle="Pemetaan keterampilan yang terverifikasi dalam pengerjaan proyek riil dan pengajaran laboratorium."
            />

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Box 1: Web Development -->
                <div class="p-8 rounded-2xl bg-white border border-[#D8DCFF] flex flex-col justify-between space-y-6 shadow-sm hover:border-[#5267FF] transition-colors">
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="p-2.5 rounded-xl bg-[#5267FF]/10 text-[#5267FF]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-[#10162B]">Web Development</h3>
                        </div>
                        <p class="text-xs text-[#556080] leading-relaxed">
                            Fokus pada arsitektur server-side Laravel, query MySQL, Blade templating, dan RESTful API.
                        </p>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['Laravel', 'PHP 8', 'MySQL', 'REST API', 'Blade', 'Tailwind CSS', 'JavaScript Vanilla', 'Bootstrap'] as $skill)
                            <span class="text-xs font-semibold px-2.5 py-1 rounded-md bg-[#EAEDFF] text-[#10162B] border border-[#D8DCFF]">
                                {{ $skill }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <!-- Box 2: UI/UX Design -->
                <div class="p-8 rounded-2xl bg-white border border-[#D8DCFF] flex flex-col justify-between space-y-6 shadow-sm hover:border-[#5267FF] transition-colors">
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="p-2.5 rounded-xl bg-[#C9FF57]/30 text-[#10162B]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h10a4 4 0 004-4V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-[#10162B]">UI/UX Design</h3>
                        </div>
                        <p class="text-xs text-[#556080] leading-relaxed">
                            Perancangan antarmuka human-centered, wireframing, design tokens, dan pengujian kegunaan empiris.
                        </p>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['Figma', 'Usability Testing', 'Maze', 'SUS Evaluation', 'User Flows', 'Wireframing', 'Interactive Prototyping', 'Design Systems'] as $skill)
                            <span class="text-xs font-semibold px-2.5 py-1 rounded-md bg-[#F3F5FA] text-[#10162B] border border-[#D8DCFF]">
                                {{ $skill }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <!-- Box 3: Tools & Methodologies -->
                <div class="p-8 rounded-2xl bg-[#10162B] text-white border border-[#242E54] flex flex-col justify-between space-y-6 shadow-sm">
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="p-2.5 rounded-xl bg-[#171F3B] text-[#C9FF57] border border-[#242E54]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-white">Alur Kerja &amp; Tools</h3>
                        </div>
                        <p class="text-xs text-[#8E9CBF] leading-relaxed">
                            Ekosistem kerja pengembangan terstruktur, version control kolaboratif, dan cloud deployment.
                        </p>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['Git & GitHub', 'Agile Scrum', 'VS Code', 'Postman', 'Supabase', 'Vercel', 'DomPDF', 'Notion'] as $tool)
                            <span class="text-xs font-semibold px-2.5 py-1 rounded-md bg-[#171F3B] text-[#EAEDFF] border border-[#242E54]">
                                {{ $tool }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 5. EXPERIENCE & EDUCATION SECTION --}}
    <section class="py-20 bg-white border-y border-[#D8DCFF]" id="experience">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Left: Experience (7 cols) -->
                <div class="lg:col-span-7 space-y-8">
                    <x-section-title 
                        badge="Jejak Pengalaman" 
                        title="Pengalaman Organisasi, Magang &amp; Laboratorium" 
                        subtitle="Keterlibatan aktif dalam lingkungan akademik, institusi media kampus, dan himpunan mahasiswa."
                    />

                    <div class="space-y-6">
                        @foreach($experiences as $exp)
                            <div class="p-6 rounded-2xl bg-[#F3F5FA] border border-[#D8DCFF] space-y-3">
                                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1">
                                    <h4 class="text-base font-bold text-[#10162B]">
                                        {{ $exp->position }}
                                    </h4>
                                    <span class="text-xs font-bold px-2.5 py-1 rounded-md bg-[#EAEDFF] text-[#5267FF] border border-[#D8DCFF] self-start sm:self-auto">
                                        {{ $exp->period }}
                                    </span>
                                </div>
                                <div class="text-xs font-semibold text-[#5267FF]">
                                    {{ $exp->organization }}
                                </div>
                                <p class="text-xs sm:text-sm text-[#556080] leading-relaxed">
                                    {{ $exp->description }}
                                </p>

                                @if(is_array($exp->bullet_points))
                                    <ul class="space-y-1.5 pt-2 border-t border-[#D8DCFF]/60 text-xs text-[#556080]">
                                        @foreach($exp->bullet_points as $point)
                                            <li class="flex items-start">
                                                <span class="text-[#5267FF] mr-2 font-bold">•</span>
                                                <span>{{ $point }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Right: Education & Achievements (5 cols) -->
                <div class="lg:col-span-5 space-y-8">
                    <!-- Education Card -->
                    <div class="space-y-6">
                        <x-section-title 
                            badge="Akademik" 
                            title="Pendidikan Formal" 
                        />
                        <div class="p-6 rounded-2xl bg-[#10162B] text-white border border-[#242E54] space-y-4">
                            <div class="space-y-1">
                                <span class="text-xs font-bold text-[#C9FF57]">2022 — Sekarang (Mahasiswa Aktif)</span>
                                <h4 class="text-lg font-bold text-white">S1 Sistem Informasi</h4>
                                <p class="text-xs text-[#8E9CBF]">Universitas Trunojoyo Madura (UTM)</p>
                            </div>
                            
                            <div class="pt-3 border-t border-[#242E54] space-y-2">
                                <span class="text-xs font-bold text-[#EAEDFF] uppercase tracking-wider">Mata Kuliah Relevan:</span>
                                <div class="flex flex-wrap gap-1.5">
                                    @foreach(['Rekayasa Perangkat Lunak', 'Pemrograman Web', 'UI/UX Design', 'Basis Data Lanjut', 'Manajemen Proyek TI', 'HCI'] as $course)
                                        <span class="text-[11px] px-2 py-0.5 rounded bg-[#171F3B] text-[#EAEDFF] border border-[#242E54]">
                                            {{ $course }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Verified Achievements Card -->
                    <div class="space-y-6">
                        <x-section-title 
                            badge="Pencapaian" 
                            title="Validasi &amp; Rekognisi" 
                        />
                        <div class="space-y-3">
                            <div class="p-4 rounded-xl bg-[#F3F5FA] border border-[#D8DCFF] flex items-start space-x-3">
                                <div class="w-8 h-8 rounded-lg bg-[#C9FF57] text-[#10162B] flex items-center justify-center font-bold text-xs flex-shrink-0">
                                    ★
                                </div>
                                <div class="space-y-0.5">
                                    <h5 class="text-xs font-bold text-[#10162B]">Skor SUS 83,0 (Kategori Excellent)</h5>
                                    <p class="text-[11px] text-[#556080]">Pengujian Usability Testing proyek UI/UX DEKAT dengan 5 responden dan 8 skenario di Maze.</p>
                                </div>
                            </div>

                            <div class="p-4 rounded-xl bg-[#F3F5FA] border border-[#D8DCFF] flex items-start space-x-3">
                                <div class="w-8 h-8 rounded-lg bg-[#5267FF] text-white flex items-center justify-center font-bold text-xs flex-shrink-0">
                                    ✓
                                </div>
                                <div class="space-y-0.5">
                                    <h5 class="text-xs font-bold text-[#10162B]">Asisten Praktikum &amp; Administrator Lab</h5>
                                    <p class="text-[11px] text-[#556080]">Terpilih mengampu mata kuliah praktikum coding dan merawat operasional komputasi lab UTM.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 6. CONTACT CTA BANNER --}}
    <section class="py-20 bg-[#10162B] text-white relative overflow-hidden future-dark-grid">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6 relative z-10">
            <span class="inline-flex items-center text-xs font-bold px-3 py-1 rounded-full bg-[#171F3B] text-[#C9FF57] border border-[#242E54]">
                Mari Terhubung
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight">
                Siap Berkolaborasi untuk Mewujudkan Produk Digital Berkualitas.
            </h2>
            <p class="text-sm sm:text-base text-[#8E9CBF] max-w-2xl mx-auto leading-relaxed">
                Tertarik mendiskusikan peluang magang, proyek rekayasa web berbasis Laravel, atau studi kasus desain antarmuka? Pintu saya selalu terbuka untuk percakapan profesional.
            </p>
            <div class="pt-4 flex flex-wrap justify-center gap-4">
                <a href="{{ route('contact.index') }}" 
                   class="inline-flex items-center px-6 py-3.5 rounded-xl text-sm font-bold text-[#10162B] bg-[#C9FF57] hover:bg-[#A6DE30] transition-colors shadow-lg">
                    <span>Kirim Pesan Melalui Formulir</span>
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
                <button type="button" 
                        class="js-copy-email inline-flex items-center px-6 py-3.5 rounded-xl text-sm font-semibold text-white bg-[#171F3B] hover:bg-[#202C55] border border-[#242E54] transition-colors"
                        data-email="dhanikusuma220@gmail.com">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"></path>
                    </svg>
                    <span>Salin Alamat Email</span>
                </button>
            </div>
        </div>
    </section>
@endsection
