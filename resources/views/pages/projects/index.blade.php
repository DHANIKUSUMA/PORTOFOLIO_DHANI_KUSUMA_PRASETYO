@extends('layouts.app')

@section('title', 'Daftar Proyek — Dhani Kusuma Prasetyo')
@section('meta_description', 'Katalog proyek Web Development (Laravel, PHP, MySQL) dan UI/UX Design (Figma, Maze) oleh Dhani Kusuma Prasetyo.')

@section('content')
    <div class="py-12 sm:py-16 bg-[#F3F5FA] future-grid min-h-screen">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
            <!-- Header Section -->
            <div class="max-w-3xl space-y-4">
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-[#EAEDFF] border border-[#D8DCFF] text-xs font-bold text-[#5267FF]">
                    <span>Katalog Proyek Terverifikasi</span>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#10162B] tracking-tight">
                    Eksplorasi Karya Rekayasa Web &amp; Desain Antarmuka.
                </h1>
                <p class="text-sm sm:text-base text-[#556080] leading-relaxed">
                    Setiap proyek dibangun berdasarkan masalah operasional atau kebutuhan pengguna nyata, dengan dokumentasi proses, kontribusi pribadi, serta teknologi yang dapat dipertanggungjawabkan.
                </p>
            </div>

            <!-- Category Filters Bar -->
            <div class="flex flex-wrap items-center gap-2 pt-2 border-b border-[#D8DCFF] pb-6">
                {{-- Server & Client Dual-Compatible Filters --}}
                <a href="{{ route('projects.index') }}" 
                   data-project-filter="all"
                   class="px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition-all cursor-pointer {{ $selectedCategory === 'all' ? 'bg-[#5267FF] text-white shadow-md' : 'bg-white text-[#10162B] border border-[#D8DCFF] hover:bg-[#EAEDFF]' }}">
                    Semua Kategori ({{ $projects->count() }})
                </a>

                @foreach($categories as $cat)
                    <a href="{{ route('projects.index', ['category' => $cat->slug]) }}" 
                       data-project-filter="{{ $cat->slug }}"
                       class="px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition-all cursor-pointer {{ $selectedCategory === $cat->slug ? 'bg-[#5267FF] text-white shadow-md' : 'bg-white text-[#10162B] border border-[#D8DCFF] hover:bg-[#EAEDFF]' }}">
                        {{ $cat->name }} ({{ $cat->projects_count }})
                    </a>
                @endforeach
            </div>

            <!-- Projects Grid -->
            @if($projects->isEmpty())
                <div class="py-16 text-center bg-white rounded-2xl border border-[#D8DCFF] p-8 space-y-3">
                    <p class="text-base font-semibold text-[#10162B]">Tidak ada proyek yang sesuai dengan kategori terpilih.</p>
                    <a href="{{ route('projects.index') }}" class="inline-block text-xs font-bold text-[#5267FF] hover:underline">
                        Reset filter ke Semua Proyek
                    </a>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                    @foreach($projects as $project)
                        <div data-project-category="{{ $project->category->slug ?? 'other' }}" class="flex">
                            <x-project-card :project="$project" />
                        </div>
                    @endforeach
                </div>
            @endif

            <!-- Bottom Note on Accuracy -->
            <div class="p-6 rounded-2xl bg-[#EAEDFF] border border-[#D8DCFF] flex items-start space-x-3 text-xs text-[#556080]">
                <span class="text-[#5267FF] font-bold text-base leading-none">ℹ</span>
                <p class="leading-relaxed">
                    <strong>Catatan Transparansi:</strong> Tautan demo daring, repositori GitHub, maupun purwarupa Figma hanya ditampilkan pada kartu atau halaman studi kasus yang URL publiknya telah disetujui untuk diakses umum.
                </p>
            </div>
        </div>
    </div>
@endsection
