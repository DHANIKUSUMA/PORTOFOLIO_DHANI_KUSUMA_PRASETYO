@props([
    'badge' => null,
    'title',
    'subtitle' => null,
    'alignment' => 'left', // left or center
    'dark' => false
])

<div class="space-y-3 {{ $alignment === 'center' ? 'text-center max-w-2xl mx-auto' : 'max-w-2xl' }} mb-12">
    @if($badge)
        <div class="inline-flex items-center space-x-1.5 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider {{ $dark ? 'bg-[#171F3B] text-[#C9FF57] border border-[#242E54]' : 'bg-[#EAEDFF] text-[#5267FF] border border-[#D8DCFF]' }}">
            <span class="w-1.5 h-1.5 rounded-full {{ $dark ? 'bg-[#C9FF57]' : 'bg-[#5267FF]' }}"></span>
            <span>{{ $badge }}</span>
        </div>
    @endif

    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight {{ $dark ? 'text-white' : 'text-[#10162B]' }}">
        {!! $title !!}
    </h2>

    @if($subtitle)
        <p class="text-sm sm:text-base leading-relaxed {{ $dark ? 'text-[#8E9CBF]' : 'text-[#556080]' }}">
            {{ $subtitle }}
        </p>
    @endif
</div>
