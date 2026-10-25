<footer class="bg-[#10162B] text-[#EAEDFF] border-t border-[#242E54] pt-16 pb-12 mt-auto">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 pb-12 border-b border-[#242E54]">
            <!-- Kolom 1: Profil Brand -->
            <div class="md:col-span-2 space-y-4">
                <div class="flex items-center space-x-2">
                    <span class="w-3 h-3 rounded-full bg-[#C9FF57]"></span>
                    <span class="font-extrabold text-xl tracking-tight text-white">
                        Dhani Kusuma Prasetyo
                    </span>
                </div>
                <p class="text-sm text-[#8E9CBF] max-w-md leading-relaxed">
                    Web Developer yang memahami proses pengembangan produk digital dan pengalaman pengguna. Mengembangkan sistem web dengan framework Laravel dan merancang antarmuka intuitif dengan Figma.
                </p>
                <div class="flex items-center space-x-3 pt-2">
                    <span class="inline-flex items-center text-xs font-semibold px-2.5 py-1 rounded bg-[#171F3B] text-[#C9FF57] border border-[#242E54]">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#C9FF57] mr-2 animate-pulse"></span>
                        Terbuka untuk Peluang Magang &amp; Karier
                    </span>
                </div>
            </div>

            <!-- Kolom 2: Navigasi Cepat -->
            <div class="space-y-3">
                <h3 class="text-xs font-bold uppercase tracking-wider text-[#C9FF57]">
                    Navigasi
                </h3>
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('projects.index') }}" class="hover:text-white transition-colors">Daftar Proyek</a>
                    </li>
                    <li>
                        <a href="{{ route('resume.index') }}" class="hover:text-white transition-colors">Resume &amp; Riwayat</a>
                    </li>
                    <li>
                        <a href="{{ route('contact.index') }}" class="hover:text-white transition-colors">Hubungi Saya</a>
                    </li>
                </ul>
            </div>

            <!-- Kolom 3: Kontak & Sosmed -->
            <div class="space-y-3">
                <h3 class="text-xs font-bold uppercase tracking-wider text-[#C9FF57]">
                    Hubungkan
                </h3>
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="mailto:dhanikusuma220@gmail.com" class="hover:text-white transition-colors flex items-center">
                            <span class="w-2 h-2 rounded-full bg-[#5267FF] mr-2"></span>
                            dhanikusuma220@gmail.com
                        </a>
                    </li>
                    <li>
                        <a href="https://linkedin.com/in/dhanikusumaprasetyo" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors flex items-center">
                            <span class="w-2 h-2 rounded-full bg-[#5267FF] mr-2"></span>
                            LinkedIn Profil
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/dhanikp" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors flex items-center">
                            <span class="w-2 h-2 rounded-full bg-[#5267FF] mr-2"></span>
                            GitHub Repository
                        </a>
                    </li>
                    <li class="pt-1 text-xs text-[#8E9CBF]">
                        📍 Bangkalan, Jawa Timur, Indonesia
                    </li>
                </ul>
            </div>
        </div>

        <!-- Baris Bawah: Hak Cipta -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-[#8E9CBF] space-y-4 sm:space-y-0">
            <p>
                &copy; {{ date('Y') }} Dhani Kusuma Prasetyo. Dibuat dengan arsitektur Laravel &amp; Tailwind CSS.
            </p>
            <p class="flex items-center space-x-1">
                <span>Design System:</span>
                <span class="font-semibold text-[#EAEDFF]">Future Campus</span>
            </p>
        </div>
    </div>
</footer>
