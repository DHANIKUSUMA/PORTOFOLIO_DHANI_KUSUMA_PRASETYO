<nav class="sticky top-0 z-50 bg-[#10162B]/90 backdrop-blur-md border-b border-[#242E54] text-white transition-all">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="group flex items-center space-x-2">
                <span class="w-3 h-3 rounded-full bg-[#C9FF57] group-hover:scale-125 transition-transform duration-200"></span>
                <span class="font-extrabold text-lg sm:text-xl tracking-tight text-white group-hover:text-[#C9FF57] transition-colors">
                    Dhani Kusuma<span class="text-[#5267FF]">.</span>
                </span>
                <span class="hidden md:inline-block text-xs font-semibold px-2 py-0.5 rounded bg-[#171F3B] text-[#EAEDFF] border border-[#242E54]">
                    Web &amp; UI/UX
                </span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-1 lg:space-x-2">
                <a href="{{ route('home') }}" 
                   class="px-3 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('home') ? 'text-[#C9FF57] bg-[#171F3B]' : 'text-[#EAEDFF] hover:text-white hover:bg-[#171F3B]/60' }}">
                    Beranda
                </a>
                <a href="{{ route('projects.index') }}" 
                   class="px-3 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('projects.*') ? 'text-[#C9FF57] bg-[#171F3B]' : 'text-[#EAEDFF] hover:text-white hover:bg-[#171F3B]/60' }}">
                    Proyek
                </a>
                <a href="{{ route('resume.index') }}" 
                   class="px-3 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('resume.*') ? 'text-[#C9FF57] bg-[#171F3B]' : 'text-[#EAEDFF] hover:text-white hover:bg-[#171F3B]/60' }}">
                    Resume &amp; Pengalaman
                </a>
                <a href="{{ route('contact.index') }}" 
                   class="px-3 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('contact.*') ? 'text-[#C9FF57] bg-[#171F3B]' : 'text-[#EAEDFF] hover:text-white hover:bg-[#171F3B]/60' }}">
                    Kontak
                </a>
            </div>

            <!-- Header Action Button -->
            <div class="hidden md:flex items-center space-x-3">
                <a href="{{ route('resume.download') }}" 
                   class="inline-flex items-center px-4 py-2 rounded-lg text-xs font-semibold text-[#10162B] bg-[#C9FF57] hover:bg-[#A6DE30] transition-colors shadow-sm">
                    <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                    </svg>
                    Unduh CV
                </a>
                <a href="{{ route('contact.index') }}" 
                   class="inline-flex items-center px-4 py-2 rounded-lg text-xs font-semibold text-white bg-[#5267FF] hover:bg-[#3F52E3] transition-colors shadow-sm">
                    Hubungi Saya
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="md:hidden flex items-center">
                <button type="button" 
                        id="mobile-menu-btn"
                        aria-expanded="false" 
                        aria-controls="mobile-menu"
                        class="p-2 rounded-lg text-[#EAEDFF] hover:text-white hover:bg-[#171F3B] focus:outline-none focus:ring-2 focus:ring-[#5267FF]">
                    <span class="sr-only">Buka menu utama</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div id="mobile-menu" class="hidden md:hidden bg-[#10162B] border-b border-[#242E54] px-4 pt-2 pb-6 space-y-2">
        <a href="{{ route('home') }}" 
           class="block px-3 py-2.5 rounded-lg text-base font-medium {{ request()->routeIs('home') ? 'bg-[#171F3B] text-[#C9FF57]' : 'text-[#EAEDFF] hover:bg-[#171F3B]' }}">
            Beranda
        </a>
        <a href="{{ route('projects.index') }}" 
           class="block px-3 py-2.5 rounded-lg text-base font-medium {{ request()->routeIs('projects.*') ? 'bg-[#171F3B] text-[#C9FF57]' : 'text-[#EAEDFF] hover:bg-[#171F3B]' }}">
            Proyek
        </a>
        <a href="{{ route('resume.index') }}" 
           class="block px-3 py-2.5 rounded-lg text-base font-medium {{ request()->routeIs('resume.*') ? 'bg-[#171F3B] text-[#C9FF57]' : 'text-[#EAEDFF] hover:bg-[#171F3B]' }}">
            Resume &amp; Pengalaman
        </a>
        <a href="{{ route('contact.index') }}" 
           class="block px-3 py-2.5 rounded-lg text-base font-medium {{ request()->routeIs('contact.*') ? 'bg-[#171F3B] text-[#C9FF57]' : 'text-[#EAEDFF] hover:bg-[#171F3B]' }}">
            Kontak
        </a>
        
        <div class="pt-4 border-t border-[#242E54] grid grid-cols-2 gap-3">
            <a href="{{ route('resume.download') }}" 
               class="flex items-center justify-center px-4 py-2.5 rounded-lg text-sm font-semibold text-[#10162B] bg-[#C9FF57] hover:bg-[#A6DE30]">
                Unduh CV
            </a>
            <a href="{{ route('contact.index') }}" 
               class="flex items-center justify-center px-4 py-2.5 rounded-lg text-sm font-semibold text-white bg-[#5267FF] hover:bg-[#3F52E3]">
                Hubungi
            </a>
        </div>
    </div>
</nav>
