@extends('layouts.app')

@section('title', $project->title . ' — Studi Kasus Portofolio Dhani Kusuma Prasetyo')
@section('meta_description', Str::limit($project->summary, 160))

@section('content')
    <div class="py-10 sm:py-16 bg-[#F3F5FA] min-h-screen">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            {{-- Breadcrumb Navigasi --}}
            <nav class="flex items-center space-x-2 text-xs font-semibold text-[#556080]">
                <a href="{{ route('home') }}" class="hover:text-[#5267FF]">Beranda</a>
                <span>/</span>
                <a href="{{ route('projects.index') }}" class="hover:text-[#5267FF]">Proyek</a>
                <span>/</span>
                <span class="text-[#10162B] truncate max-w-xs">{{ $project->title }}</span>
            </nav>

            {{-- 1. HEADER PROYEK --}}
            <header class="space-y-6">
                <div class="flex flex-wrap items-center gap-2">
                    <span class="inline-flex items-center text-xs font-bold px-3 py-1 rounded-full bg-[#EAEDFF] text-[#5267FF] border border-[#D8DCFF]">
                        {{ $project->category->name }}
                    </span>
                    <span class="inline-flex items-center text-xs font-semibold px-2.5 py-1 rounded-full bg-white text-[#10162B] border border-[#D8DCFF]">
                        Tahun {{ $project->year }}
                    </span>
                    @if($project->is_featured)
                        <span class="inline-flex items-center text-xs font-bold px-2.5 py-1 rounded-full bg-[#C9FF57] text-[#10162B]">
                            Featured Case Study
                        </span>
                    @endif
                </div>

                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#10162B] tracking-tight leading-tight">
                    {{ $project->title }}
                </h1>

                <p class="text-base sm:text-xl text-[#556080] leading-relaxed">
                    {{ $project->summary }}
                </p>

                {{-- Metadata Grid (Peran, Waktu, Stack) --}}
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-4 pb-2 border-y border-[#D8DCFF]">
                    <div>
                        <span class="block text-xs font-bold uppercase text-[#8E9CBF]">Peran Saya</span>
                        <span class="text-sm font-bold text-[#10162B]">{{ $project->role }}</span>
                    </div>
                    <div>
                        <span class="block text-xs font-bold uppercase text-[#8E9CBF]">Kategori / Bidang</span>
                        <span class="text-sm font-bold text-[#10162B]">{{ $project->category->name }}</span>
                    </div>
                    <div>
                        <span class="block text-xs font-bold uppercase text-[#8E9CBF]">Periode Pengerjaan</span>
                        <span class="text-sm font-bold text-[#10162B]">{{ $project->year }}</span>
                    </div>
                </div>

                {{-- Technologies Pills --}}
                @if(is_array($project->technologies))
                    <div class="space-y-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#5267FF]">Teknologi &amp; Perangkat yang Digunakan:</span>
                        <div class="flex flex-wrap gap-2">
                            @foreach($project->technologies as $tech)
                                <span class="text-xs font-semibold px-3 py-1 rounded-lg bg-white text-[#10162B] border border-[#D8DCFF] shadow-xs">
                                    {{ $tech }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- Action Links jika ada demo / repo / figma --}}
                @if($project->demo_url || $project->repository_url || $project->figma_url)
                    <div class="pt-2 flex flex-wrap gap-3">
                        @if($project->demo_url)
                            <a href="{{ $project->demo_url }}" target="_blank" rel="noopener noreferrer" 
                               class="inline-flex items-center px-4 py-2.5 rounded-xl text-xs font-bold text-white bg-[#5267FF] hover:bg-[#3F52E3] transition-colors shadow-sm">
                                <span>Buka Demo Aplikasi</span>
                                <svg class="w-3.5 h-3.5 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        @endif

                        @if($project->repository_url)
                            <a href="{{ $project->repository_url }}" target="_blank" rel="noopener noreferrer" 
                               class="inline-flex items-center px-4 py-2.5 rounded-xl text-xs font-bold text-[#10162B] bg-white border border-[#D8DCFF] hover:bg-[#EAEDFF] transition-colors">
                                <span>Repositori Kode GitHub</span>
                            </a>
                        @endif

                        @if($project->figma_url)
                            <a href="{{ $project->figma_url }}" target="_blank" rel="noopener noreferrer" 
                               class="inline-flex items-center px-4 py-2.5 rounded-xl text-xs font-bold text-[#10162B] bg-[#C9FF57] hover:bg-[#A6DE30] transition-colors">
                                <span>Lihat File Desain Figma</span>
                            </a>
                        @endif
                    </div>
                @endif
            </header>

            {{-- 2. HERO IMAGE / MOCKUP VIEW --}}
            @if($project->thumbnail)
                <figure class="rounded-2xl overflow-hidden border border-[#D8DCFF] bg-[#10162B] shadow-xl">
                    <img src="{{ asset($project->thumbnail) }}" 
                         alt="Visualisasi tampilan {{ $project->title }}" 
                         class="w-full h-auto object-cover max-h-[500px]">
                    <figcaption class="p-3 text-xs text-[#8E9CBF] bg-[#171F3B] border-t border-[#242E54] text-center">
                        Representasi antarmuka dan alur sistem untuk {{ $project->title }}.
                    </figcaption>
                </figure>
            @endif

            {{-- 3. STUDI KASUS KONTEN STRUKTURAL --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                <!-- Main Narrative (8 cols) -->
                <div class="lg:col-span-8 space-y-10">
                    
                    {{-- A. Problem / Latar Belakang --}}
                    @if($project->problem)
                        <section class="p-6 sm:p-8 rounded-2xl bg-white border border-[#D8DCFF] space-y-3 shadow-xs">
                            <div class="flex items-center space-x-2 text-xs font-bold uppercase tracking-wider text-[#FF5F56]">
                                <span class="w-2 h-2 rounded-full bg-[#FF5F56]"></span>
                                <span>Latar Belakang &amp; Permasalahan</span>
                            </div>
                            <h2 class="text-xl font-bold text-[#10162B]">
                                Tantangan yang Dihadapi
                            </h2>
                            <p class="text-sm sm:text-base text-[#556080] leading-relaxed">
                                {{ $project->problem }}
                            </p>
                        </section>
                    @endif

                    {{-- B. Objectives / Tujuan Proyek --}}
                    @if($project->objectives)
                        <section class="p-6 sm:p-8 rounded-2xl bg-white border border-[#D8DCFF] space-y-3 shadow-xs">
                            <div class="flex items-center space-x-2 text-xs font-bold uppercase tracking-wider text-[#5267FF]">
                                <span class="w-2 h-2 rounded-full bg-[#5267FF]"></span>
                                <span>Tujuan &amp; Solusi Sistem</span>
                            </div>
                            <h2 class="text-xl font-bold text-[#10162B]">
                                Sasaran yang Ingin Dicapai
                            </h2>
                            <p class="text-sm sm:text-base text-[#556080] leading-relaxed">
                                {{ $project->objectives }}
                            </p>
                        </section>
                    @endif

                    {{-- C. My Contribution / Kontribusi Pribadi --}}
                    @if($project->my_contribution)
                        <section class="p-6 sm:p-8 rounded-2xl bg-[#EAEDFF] border border-[#D8DCFF] space-y-3">
                            <div class="flex items-center space-x-2 text-xs font-bold uppercase tracking-wider text-[#5267FF]">
                                <span class="w-2 h-2 rounded-full bg-[#5267FF]"></span>
                                <span>Kontribusi Pribadi Terverifikasi</span>
                            </div>
                            <h2 class="text-xl font-bold text-[#10162B]">
                                Tanggung Jawab &amp; Implementasi Teknis
                            </h2>
                            <p class="text-sm sm:text-base text-[#10162B] leading-relaxed">
                                {{ $project->my_contribution }}
                            </p>
                        </section>
                    @endif

                    {{-- D. Process / Proses Desain atau Rekayasa --}}
                    @if($project->process)
                        <section class="p-6 sm:p-8 rounded-2xl bg-white border border-[#D8DCFF] space-y-3 shadow-xs">
                            <div class="flex items-center space-x-2 text-xs font-bold uppercase tracking-wider text-[#10162B]">
                                <span class="w-2 h-2 rounded-full bg-[#10162B]"></span>
                                <span>Metodologi &amp; Tahap Pengembangan</span>
                            </div>
                            <h2 class="text-xl font-bold text-[#10162B]">
                                Proses Eksekusi Proyek
                            </h2>
                            <p class="text-sm sm:text-base text-[#556080] leading-relaxed">
                                {{ $project->process }}
                            </p>
                        </section>
                    @endif

                    {{-- E. Verified Results / Hasil & Evaluasi Terbukti --}}
                    @if($project->verified_results)
                        <section class="p-6 sm:p-8 rounded-2xl bg-[#10162B] text-white border border-[#242E54] space-y-4">
                            <div class="flex items-center space-x-2 text-xs font-bold uppercase tracking-wider text-[#C9FF57]">
                                <span class="w-2 h-2 rounded-full bg-[#C9FF57]"></span>
                                <span>Hasil &amp; Pembelajaran Nyata</span>
                            </div>
                            <h2 class="text-xl font-bold text-white">
                                Validasi Terukur &amp; Dampak
                            </h2>
                            <p class="text-sm sm:text-base text-[#8E9CBF] leading-relaxed">
                                {{ $project->verified_results }}
                            </p>
                        </section>
                    @endif

                </div>

                <!-- Right Sidebar Metadata (4 cols) -->
                <div class="lg:col-span-4 space-y-6">
                    <div class="p-6 rounded-2xl bg-white border border-[#D8DCFF] space-y-4 shadow-xs sticky top-28">
                        <h3 class="text-base font-bold text-[#10162B] pb-3 border-b border-[#F3F5FA]">
                            Ringkasan Kasus
                        </h3>

                        <div class="space-y-3 text-xs text-[#556080]">
                            <div>
                                <span class="font-bold text-[#10162B] block">Kategori Utama:</span>
                                <span>{{ $project->category->name }}</span>
                            </div>
                            <div>
                                <span class="font-bold text-[#10162B] block">Spesialisasi:</span>
                                <span>{{ $project->category->slug === 'web-development' ? 'Laravel & MySQL Engineering' : 'UI/UX Research & Usability' }}</span>
                            </div>
                            <div>
                                <span class="font-bold text-[#10162B] block">Status Publikasi:</span>
                                <span class="text-[#5267FF] font-semibold">Terdokumentasi Resmi</span>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-[#F3F5FA] space-y-2">
                            <a href="{{ route('contact.index') }}" 
                               class="w-full inline-flex items-center justify-center px-4 py-2.5 rounded-xl text-xs font-bold text-white bg-[#5267FF] hover:bg-[#3F52E3] transition-colors shadow-sm">
                                Diskusikan Proyek Serupa
                            </a>
                            <a href="{{ route('projects.index') }}" 
                               class="w-full inline-flex items-center justify-center px-4 py-2.5 rounded-xl text-xs font-semibold text-[#10162B] bg-[#F3F5FA] hover:bg-[#EAEDFF] transition-colors">
                                Kembali ke Daftar Proyek
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 4. NAVIGASI PROYEK LAINNYA --}}
            @if($otherProjects->isNotEmpty())
                <div class="pt-12 border-t border-[#D8DCFF] space-y-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-bold text-[#10162B]">Proyek Lainnya yang Menarik</h3>
                        <a href="{{ route('projects.index') }}" class="text-xs font-bold text-[#5267FF] hover:underline">
                            Lihat Semua →
                        </a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach($otherProjects as $other)
                            <x-project-card :project="$other" />
                        @endforeach
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
