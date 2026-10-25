@props(['project'])

<article class="group bg-white rounded-2xl border border-[#D8DCFF] overflow-hidden flex flex-col transition-all duration-300 hover:shadow-xl hover:border-[#5267FF]/60 hover:-translate-y-1">
    {{-- Thumbnail Media --}}
    <div class="relative w-full aspect-[16/10] bg-[#10162B] overflow-hidden border-b border-[#D8DCFF]">
        @if($project->thumbnail)
            <img src="{{ asset($project->thumbnail) }}" 
                 alt="Tangkapan layar atau diagram arsitektur {{ $project->title }}" 
                 loading="lazy"
                 class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105">
        @else
            <div class="w-full h-full flex items-center justify-center bg-[#171F3B] text-[#EAEDFF]">
                <span class="text-xs font-semibold px-3 py-1 rounded bg-[#10162B] border border-[#242E54]">Dokumentasi Proyek</span>
            </div>
        @endif

        {{-- Badge Kategori --}}
        <div class="absolute top-3 left-3 flex flex-wrap gap-1.5">
            <span class="inline-flex items-center text-xs font-bold px-2.5 py-1 rounded-md bg-[#10162B]/90 backdrop-blur-sm text-[#C9FF57] border border-[#242E54] shadow-sm">
                {{ $project->category->name ?? 'Project' }}
            </span>
            @if($project->is_featured)
                <span class="inline-flex items-center text-xs font-bold px-2 py-0.5 rounded-md bg-[#5267FF] text-white shadow-sm">
                    Featured
                </span>
            @endif
        </div>

        {{-- Tahun --}}
        <div class="absolute bottom-3 right-3">
            <span class="text-xs font-semibold px-2 py-0.5 rounded bg-[#10162B]/80 text-[#EAEDFF] backdrop-blur-sm border border-[#242E54]">
                {{ $project->year }}
            </span>
        </div>
    </div>

    {{-- Konten Kartu --}}
    <div class="p-6 flex flex-col flex-grow justify-between">
        <div class="space-y-3">
            <div class="flex items-center justify-between text-xs text-[#5267FF] font-semibold">
                <span>{{ $project->role }}</span>
            </div>

            <h3 class="text-lg sm:text-xl font-bold text-[#10162B] group-hover:text-[#5267FF] transition-colors leading-snug">
                <a href="{{ route('projects.show', $project) }}" class="focus:outline-none focus:underline">
                    {{ $project->title }}
                </a>
            </h3>

            <p class="text-sm text-[#556080] line-clamp-3 leading-relaxed">
                {{ $project->summary }}
            </p>
        </div>

        <div class="pt-5 mt-4 border-t border-[#F3F5FA] space-y-4">
            {{-- Technology Tags --}}
            @if(is_array($project->technologies))
                <div class="flex flex-wrap gap-1.5">
                    @foreach(array_slice($project->technologies, 0, 4) as $tech)
                        <span class="text-[11px] font-medium px-2 py-0.5 rounded bg-[#EAEDFF] text-[#10162B] border border-[#D8DCFF]">
                            {{ $tech }}
                        </span>
                    @endforeach
                    @if(count($project->technologies) > 4)
                        <span class="text-[11px] font-medium px-1.5 py-0.5 rounded bg-gray-100 text-gray-500">
                            +{{ count($project->technologies) - 4 }}
                        </span>
                    @endif
                </div>
            @endif

            {{-- Links Action --}}
            <div class="flex items-center justify-between pt-1">
                <a href="{{ route('projects.show', $project) }}" 
                   class="inline-flex items-center text-xs font-bold text-[#5267FF] hover:text-[#3F52E3] group/link">
                    <span>Lihat Studi Kasus</span>
                    <svg class="w-4 h-4 ml-1 transition-transform group-hover/link:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>

                {{-- Tampilkan tautan demo/repo/figma HANYA jika valid & tersedia --}}
                <div class="flex items-center space-x-2">
                    @if($project->demo_url)
                        <a href="{{ $project->demo_url }}" target="_blank" rel="noopener noreferrer" 
                           title="Live Demo"
                           class="p-1.5 rounded-lg text-gray-500 hover:text-[#5267FF] hover:bg-[#EAEDFF] transition-colors">
                            <span class="sr-only">Demo</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                    @endif
                    @if($project->repository_url)
                        <a href="{{ $project->repository_url }}" target="_blank" rel="noopener noreferrer" 
                           title="Source Code Repository"
                           class="p-1.5 rounded-lg text-gray-500 hover:text-[#5267FF] hover:bg-[#EAEDFF] transition-colors">
                            <span class="sr-only">GitHub</span>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"></path>
                            </svg>
                        </a>
                    @endif
                    @if($project->figma_url)
                        <a href="{{ $project->figma_url }}" target="_blank" rel="noopener noreferrer" 
                           title="Figma Prototype"
                           class="p-1.5 rounded-lg text-gray-500 hover:text-[#5267FF] hover:bg-[#EAEDFF] transition-colors">
                            <span class="sr-only">Figma</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h10a4 4 0 004-4V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4z"></path>
                            </svg>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</article>
