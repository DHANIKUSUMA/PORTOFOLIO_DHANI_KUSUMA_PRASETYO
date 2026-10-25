@extends('layouts.app')

@section('title', 'Hubungi Dhani Kusuma Prasetyo — Kolaborasi & Kesempatan Kerja')
@section('meta_description', 'Kirim pesan atau pertanyaan langsung ke Dhani Kusuma Prasetyo untuk peluang kerja, magang, atau kolaborasi proyek web & UI/UX.')

@section('content')
    <div class="py-12 sm:py-16 bg-[#F3F5FA] future-grid min-h-screen">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <!-- Header Section -->
            <div class="max-w-2xl space-y-3">
                <span class="inline-flex items-center text-xs font-bold px-3 py-1 rounded-full bg-[#EAEDFF] text-[#5267FF] border border-[#D8DCFF]">
                    Saluran Komunikasi
                </span>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#10162B] tracking-tight">
                    Mari Mulai Percakapan.
                </h1>
                <p class="text-sm sm:text-base text-[#556080] leading-relaxed">
                    Apakah Anda sedang mencari kandidat Web Developer berbakat, desainer UI/UX yang memahami data, atau ingin mendiskusikan kolaborasi produk? Silakan tinggalkan pesan melalui formulir di bawah.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
                
                <!-- Left: Informasi Kontak & Profil Langsung (5 cols) -->
                <div class="lg:col-span-5 space-y-6">
                    <div class="p-6 sm:p-8 rounded-2xl bg-[#10162B] text-white border border-[#242E54] space-y-6 shadow-md">
                        <div class="space-y-2">
                            <span class="text-xs font-bold uppercase tracking-wider text-[#C9FF57]">
                                Kontak Langsung
                            </span>
                            <h3 class="text-xl font-bold text-white">
                                Informasi Penghubung
                            </h3>
                            <p class="text-xs text-[#8E9CBF]">
                                Saya biasanya membalas email dalam kurun waktu 1x24 jam kerja.
                            </p>
                        </div>

                        <div class="space-y-4 pt-2">
                            <!-- Email -->
                            <div class="flex items-start space-x-3">
                                <div class="w-9 h-9 rounded-xl bg-[#171F3B] border border-[#242E54] text-[#5267FF] flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div class="space-y-0.5">
                                    <span class="text-[11px] text-[#8E9CBF] block">Email Resmi:</span>
                                    <a href="mailto:{{ $email }}" class="text-xs sm:text-sm font-bold text-[#EAEDFF] hover:text-[#C9FF57] transition-colors break-all">
                                        {{ $email }}
                                    </a>
                                </div>
                            </div>

                            <!-- LinkedIn -->
                            <div class="flex items-start space-x-3">
                                <div class="w-9 h-9 rounded-xl bg-[#171F3B] border border-[#242E54] text-[#5267FF] flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                    </svg>
                                </div>
                                <div class="space-y-0.5">
                                    <span class="text-[11px] text-[#8E9CBF] block">LinkedIn:</span>
                                    <a href="{{ $linkedin }}" target="_blank" rel="noopener noreferrer" class="text-xs sm:text-sm font-bold text-[#EAEDFF] hover:text-[#C9FF57] transition-colors">
                                        linkedin.com/in/dhanikusumaprasetyo
                                    </a>
                                </div>
                            </div>

                            <!-- GitHub -->
                            <div class="flex items-start space-x-3">
                                <div class="w-9 h-9 rounded-xl bg-[#171F3B] border border-[#242E54] text-[#5267FF] flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"></path>
                                    </svg>
                                </div>
                                <div class="space-y-0.5">
                                    <span class="text-[11px] text-[#8E9CBF] block">GitHub Repository:</span>
                                    <a href="{{ $github }}" target="_blank" rel="noopener noreferrer" class="text-xs sm:text-sm font-bold text-[#EAEDFF] hover:text-[#C9FF57] transition-colors">
                                        github.com/dhanikp
                                    </a>
                                </div>
                            </div>

                            <!-- Lokasi -->
                            <div class="flex items-start space-x-3">
                                <div class="w-9 h-9 rounded-xl bg-[#171F3B] border border-[#242E54] text-[#C9FF57] flex items-center justify-center flex-shrink-0">
                                    📍
                                </div>
                                <div class="space-y-0.5">
                                    <span class="text-[11px] text-[#8E9CBF] block">Domisili:</span>
                                    <span class="text-xs sm:text-sm font-semibold text-[#EAEDFF]">
                                        {{ $location }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Copy Email Button Action -->
                        <div class="pt-4 border-t border-[#242E54]">
                            <button type="button" 
                                    class="js-copy-email w-full py-2.5 px-4 rounded-xl text-xs font-bold text-[#10162B] bg-[#C9FF57] hover:bg-[#A6DE30] transition-colors"
                                    data-email="{{ $email }}">
                                Salin Alamat Email ke Papan Klip
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Right: Formulir Kontak (7 cols) -->
                <div class="lg:col-span-7">
                    <div class="p-6 sm:p-8 rounded-2xl bg-white border border-[#D8DCFF] shadow-xs">
                        <h2 class="text-xl font-bold text-[#10162B] mb-6">
                            Kirim Formulir Pesan
                        </h2>

                        @if($errors->any())
                            <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-200 text-red-700 text-xs sm:text-sm space-y-1">
                                <span class="font-bold block">Mohon periksa kembali input formulir:</span>
                                <ul class="list-disc list-inside space-y-0.5">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('contact.send') }}" method="POST" class="space-y-5">
                            @csrf

                            {{-- Honeypot Anti-Spam (Tersembunyi bagi manusia, ditangkap jika diisi robot bot) --}}
                            <div class="hidden" aria-hidden="true">
                                <label for="company_catch">Jangan diisi jika Anda manusia:</label>
                                <input type="text" name="company_catch" id="company_catch" tabindex="-1" autocomplete="off">
                            </div>

                            <!-- Nama -->
                            <div class="space-y-1.5">
                                <label for="name" class="block text-xs font-bold uppercase tracking-wider text-[#10162B]">
                                    Nama Lengkap <span class="text-[#5267FF]">*</span>
                                </label>
                                <input type="text" 
                                       name="name" 
                                       id="name" 
                                       value="{{ old('name') }}"
                                       required
                                       placeholder="cth. Sarah Wijaya"
                                       class="w-full px-4 py-3 rounded-xl border {{ $errors->has('name') ? 'border-red-400 focus:ring-red-400' : 'border-[#D8DCFF] focus:border-[#5267FF] focus:ring-[#5267FF]' }} bg-[#F3F5FA] text-sm text-[#10162B] focus:outline-none focus:ring-2 focus:bg-white transition-all">
                                @error('name')
                                    <p class="text-xs text-red-500 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="space-y-1.5">
                                <label for="email" class="block text-xs font-bold uppercase tracking-wider text-[#10162B]">
                                    Alamat Email <span class="text-[#5267FF]">*</span>
                                </label>
                                <input type="email" 
                                       name="email" 
                                       id="email" 
                                       value="{{ old('email') }}"
                                       required
                                       placeholder="nama@perusahaan.com"
                                       class="w-full px-4 py-3 rounded-xl border {{ $errors->has('email') ? 'border-red-400 focus:ring-red-400' : 'border-[#D8DCFF] focus:border-[#5267FF] focus:ring-[#5267FF]' }} bg-[#F3F5FA] text-sm text-[#10162B] focus:outline-none focus:ring-2 focus:bg-white transition-all">
                                @error('email')
                                    <p class="text-xs text-red-500 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Subjek -->
                            <div class="space-y-1.5">
                                <label for="subject" class="block text-xs font-bold uppercase tracking-wider text-[#10162B]">
                                    Subjek Pesan <span class="text-[#5267FF]">*</span>
                                </label>
                                <input type="text" 
                                       name="subject" 
                                       id="subject" 
                                       value="{{ old('subject') }}"
                                       required
                                       placeholder="cth. Tawaran Peluang Magang Web Developer"
                                       class="w-full px-4 py-3 rounded-xl border {{ $errors->has('subject') ? 'border-red-400 focus:ring-red-400' : 'border-[#D8DCFF] focus:border-[#5267FF] focus:ring-[#5267FF]' }} bg-[#F3F5FA] text-sm text-[#10162B] focus:outline-none focus:ring-2 focus:bg-white transition-all">
                                @error('subject')
                                    <p class="text-xs text-red-500 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Isi Pesan -->
                            <div class="space-y-1.5">
                                <label for="message" class="block text-xs font-bold uppercase tracking-wider text-[#10162B]">
                                    Pesan atau Rincian Diskusi <span class="text-[#5267FF]">*</span>
                                </label>
                                <textarea name="message" 
                                          id="message" 
                                          rows="5"
                                          required
                                          placeholder="Tuliskan latar belakang organisasi, deskripsi proyek, atau pertanyaan Anda di sini..."
                                          class="w-full px-4 py-3 rounded-xl border {{ $errors->has('message') ? 'border-red-400 focus:ring-red-400' : 'border-[#D8DCFF] focus:border-[#5267FF] focus:ring-[#5267FF]' }} bg-[#F3F5FA] text-sm text-[#10162B] focus:outline-none focus:ring-2 focus:bg-white transition-all leading-relaxed">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-xs text-red-500 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="pt-2">
                                <button type="submit" 
                                        class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3.5 rounded-xl text-sm font-bold text-white bg-[#5267FF] hover:bg-[#3F52E3] transition-all duration-200 shadow-md shadow-[#5267FF]/20 hover:-translate-y-0.5">
                                    <span>Kirimkan Pesan Sekarang</span>
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
