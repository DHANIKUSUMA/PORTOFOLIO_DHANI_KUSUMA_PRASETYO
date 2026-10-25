<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title', 'Dhani Kusuma Prasetyo — Web Developer & UI/UX Designer')</title>
    <meta name="description" content="@yield('meta_description', 'Portofolio personal Dhani Kusuma Prasetyo - Web Developer dengan fokus pada Laravel, PHP, MySQL, serta UI/UX Designer berbasis Figma dan Usability Testing.')">
    <meta name="author" content="Dhani Kusuma Prasetyo">
    
    <!-- Open Graph / Meta Sosial -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Dhani Kusuma Prasetyo — Web Developer & UI/UX Designer')">
    <meta property="og:description" content="@yield('meta_description', 'Membangun aplikasi web dengan Laravel dan merancang pengalaman digital intuitif dengan Figma.')">
    
    <!-- Google Fonts: Plus Jakarta Sans & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-[#F3F5FA] text-[#10162B] antialiased selection:bg-[#5267FF] selection:text-white flex flex-col min-h-screen">

    {{-- Navbar Komponen --}}
    @include('components.navbar')

    {{-- Notifikasi Flash --}}
    @if(session('success'))
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 w-full">
            <div class="bg-[#C9FF57]/30 border-2 border-[#10162B] text-[#10162B] px-5 py-4 rounded-xl flex items-center justify-between shadow-sm">
                <div class="flex items-center space-x-3">
                    <svg class="w-6 h-6 text-[#5267FF] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="font-medium text-sm sm:text-base">{{ session('success') }}</span>
                </div>
                <button type="button" onclick="this.parentElement.parentElement.remove()" class="text-[#10162B] hover:opacity-70 p-1">
                    <span class="sr-only">Tutup</span>
                    ✕
                </button>
            </div>
        </div>
    @endif

    {{-- Main Content --}}
    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- Footer Komponen --}}
    @include('components.footer')

    @stack('scripts')
</body>
</html>
