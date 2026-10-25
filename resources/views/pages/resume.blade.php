@extends('layouts.app')

@section('title', 'Resume & Riwayat Profesional — Dhani Kusuma Prasetyo')
@section('meta_description', 'Riwayat pendidikan, pengalaman kerja magang, organisasi himpunan, asisten praktikum laboratorium, dan pencapaian Dhani Kusuma Prasetyo.')

@section('content')
    <div class="py-12 sm:py-16 bg-[#F3F5FA] future-grid min-h-screen">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <!-- Header Resume -->
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-6 pb-8 border-b border-[#D8DCFF]">
                <div class="space-y-2">
                    <span class="inline-flex items-center text-xs font-bold px-3 py-1 rounded-full bg-[#EAEDFF] text-[#5267FF] border border-[#D8DCFF]">
                        Curriculum Vitae &amp; Rekam Jejak
                    </span>
                    <h1 class="text-3xl sm:text-4xl font-extrabold text-[#10162B] tracking-tight">
                        Resume Profesional
                    </h1>
                    <p class="text-sm text-[#556080]">
                        Dhani Kusuma Prasetyo • Web Developer &amp; UI/UX Designer
                    </p>
                </div>

                <div>
                    <a href="{{ route('resume.download') }}" 
                       class="inline-flex items-center px-5 py-3 rounded-xl text-sm font-bold text-[#10162B] bg-[#C9FF57] hover:bg-[#A6DE30] transition-colors shadow-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        <span>Unduh CV Format PDF</span>
                    </a>
                </div>
            </div>

            <!-- 1. PENDIDIKAN FORMAL -->
            <section class="space-y-6">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 rounded-lg bg-[#5267FF] text-white flex items-center justify-center font-bold text-xs">
                        🎓
                    </div>
                    <h2 class="text-xl font-bold text-[#10162B]">Pendidikan Formal</h2>
                </div>

                <div class="p-6 sm:p-8 rounded-2xl bg-white border border-[#D8DCFF] space-y-4 shadow-xs">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1">
                        <div>
                            <h3 class="text-lg font-bold text-[#10162B]">{{ $education['institution'] }}</h3>
                            <p class="text-sm font-semibold text-[#5267FF]">{{ $education['degree'] }}</p>
                        </div>
                        <span class="text-xs font-semibold px-3 py-1 rounded-full bg-[#EAEDFF] text-[#5267FF] border border-[#D8DCFF] self-start sm:self-auto">
                            {{ $education['period'] }}
                        </span>
                    </div>

                    <p class="text-xs text-[#8E9CBF]">Lokasi: {{ $education['location'] }}</p>

                    <div class="pt-3 border-t border-[#F3F5FA] space-y-2">
                        <span class="text-xs font-bold text-[#10162B] uppercase tracking-wider block">Mata Kuliah Inti Terkait:</span>
                        <div class="flex flex-wrap gap-2">
                            @foreach($education['relevant_courses'] as $course)
                                <span class="text-xs font-medium px-2.5 py-1 rounded-md bg-[#F3F5FA] text-[#10162B] border border-[#D8DCFF]">
                                    {{ $course }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <!-- 2. PENGALAMAN KERJA, ORGANISASI & ASISTEN PRAKTIKUM -->
            <section class="space-y-6">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 rounded-lg bg-[#10162B] text-[#C9FF57] flex items-center justify-center font-bold text-xs">
                        💼
                    </div>
                    <h2 class="text-xl font-bold text-[#10162B]">Pengalaman Kerja, Organisasi &amp; Laboratorium</h2>
                </div>

                <div class="space-y-6">
                    @foreach($experiences as $exp)
                        <div class="p-6 sm:p-8 rounded-2xl bg-white border border-[#D8DCFF] space-y-4 shadow-xs">
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1">
                                <div>
                                    <h3 class="text-lg font-bold text-[#10162B]">{{ $exp->position }}</h3>
                                    <p class="text-sm font-semibold text-[#5267FF]">{{ $exp->organization }}</p>
                                </div>
                                <span class="text-xs font-semibold px-3 py-1 rounded-full bg-[#EAEDFF] text-[#10162B] border border-[#D8DCFF] self-start sm:self-auto">
                                    {{ $exp->period }}
                                </span>
                            </div>

                            <p class="text-sm text-[#556080] leading-relaxed">
                                {{ $exp->description }}
                            </p>

                            @if(is_array($exp->bullet_points))
                                <div class="pt-3 border-t border-[#F3F5FA]">
                                    <ul class="space-y-2 text-xs sm:text-sm text-[#556080]">
                                        @foreach($exp->bullet_points as $point)
                                            <li class="flex items-start">
                                                <span class="text-[#5267FF] mr-2 font-bold">•</span>
                                                <span class="leading-relaxed">{{ $point }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- 3. KEAHLIAN & TEKNOLOGI -->
            <section class="space-y-6">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 rounded-lg bg-[#5267FF] text-white flex items-center justify-center font-bold text-xs">
                        ⚡
                    </div>
                    <h2 class="text-xl font-bold text-[#10162B]">Pemetaan Keahlian</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Web Dev -->
                    <div class="p-6 rounded-2xl bg-white border border-[#D8DCFF] space-y-3">
                        <h3 class="text-sm font-bold text-[#10162B] uppercase tracking-wider text-[#5267FF]">
                            Web Development
                        </h3>
                        <div class="flex flex-wrap gap-1.5">
                            @foreach($skills['web_dev'] as $item)
                                <span class="text-xs font-medium px-2 py-1 rounded bg-[#EAEDFF] text-[#10162B] border border-[#D8DCFF]">
                                    {{ $item }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    <!-- UI/UX -->
                    <div class="p-6 rounded-2xl bg-white border border-[#D8DCFF] space-y-3">
                        <h3 class="text-sm font-bold text-[#10162B] uppercase tracking-wider text-[#10162B]">
                            UI/UX &amp; Riset
                        </h3>
                        <div class="flex flex-wrap gap-1.5">
                            @foreach($skills['ui_ux'] as $item)
                                <span class="text-xs font-medium px-2 py-1 rounded bg-[#F3F5FA] text-[#10162B] border border-[#D8DCFF]">
                                    {{ $item }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    <!-- Tools & Workflow -->
                    <div class="p-6 rounded-2xl bg-[#10162B] text-white border border-[#242E54] space-y-3">
                        <h3 class="text-sm font-bold uppercase tracking-wider text-[#C9FF57]">
                            Alur Kerja &amp; Ekosistem
                        </h3>
                        <div class="flex flex-wrap gap-1.5">
                            @foreach($skills['tools_workflow'] as $item)
                                <span class="text-xs font-medium px-2 py-1 rounded bg-[#171F3B] text-[#EAEDFF] border border-[#242E54]">
                                    {{ $item }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <!-- 4. PENCAPAIAN TERVERIFIKASI -->
            <section class="space-y-6">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 rounded-lg bg-[#C9FF57] text-[#10162B] flex items-center justify-center font-bold text-xs">
                        🏆
                    </div>
                    <h2 class="text-xl font-bold text-[#10162B]">Pencapaian &amp; Rekognisi</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    @foreach($achievements as $ach)
                        <div class="p-6 rounded-2xl bg-white border border-[#D8DCFF] space-y-2 flex flex-col justify-between shadow-xs">
                            <div class="space-y-2">
                                <span class="text-[11px] font-bold px-2 py-0.5 rounded bg-[#EAEDFF] text-[#5267FF]">
                                    {{ $ach['year'] }}
                                </span>
                                <h3 class="text-sm font-bold text-[#10162B] leading-snug">
                                    {{ $ach['title'] }}
                                </h3>
                                <p class="text-xs text-[#556080] leading-relaxed">
                                    {{ $ach['description'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- Download CV Bottom Action -->
            <div class="p-8 rounded-2xl bg-[#10162B] text-white border border-[#242E54] flex flex-col sm:flex-row sm:items-center justify-between gap-6">
                <div class="space-y-1">
                    <h3 class="text-lg font-bold text-white">Ingin menyimpan rekam jejak ini?</h3>
                    <p class="text-xs sm:text-sm text-[#8E9CBF]">Unduh salinan resmi Curriculum Vitae (CV) dalam format PDF.</p>
                </div>
                <a href="{{ route('resume.download') }}" 
                   class="inline-flex items-center justify-center px-6 py-3 rounded-xl text-xs font-bold text-[#10162B] bg-[#C9FF57] hover:bg-[#A6DE30] transition-colors self-start sm:self-auto shadow-md">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                    </svg>
                    <span>Unduh CV PDF Sekarang</span>
                </a>
            </div>

        </div>
    </div>
@endsection
