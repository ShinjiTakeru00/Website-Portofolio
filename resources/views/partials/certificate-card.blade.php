<article class="tech-card group overflow-hidden">
    <a href="{{ asset($certificate['pdf']) }}" class="block" target="_blank" rel="noreferrer" aria-label="Open certificate: {{ $certificate['title'] }}">
        <div class="aspect-[16/11] overflow-hidden border-b border-line bg-ink">
            <img src="{{ asset($certificate['image']) }}" alt="{{ $certificate['title'] }} certificate preview" class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.03]">
        </div>
    </a>
    <div class="p-5">
        <div class="flex items-start justify-between gap-4">
            <div>
                <p class="font-mono text-xs font-bold uppercase tracking-[0.16em] text-terminal">{{ $certificate['issuer'] }}</p>
                <h3 class="mt-3 font-display text-xl font-extrabold leading-tight text-paper">{{ $certificate['title'] }}</h3>
            </div>
            <a href="{{ asset($certificate['pdf']) }}" target="_blank" rel="noreferrer" aria-label="Open {{ $certificate['title'] }}" class="inline-flex size-9 shrink-0 items-center justify-center border border-line text-paper/74 transition hover:border-terminal hover:bg-terminal hover:text-ink">
                <i data-lucide="arrow-up-right" class="size-4"></i>
            </a>
        </div>
        <p class="mt-4 leading-7 text-paper/64">{{ $certificate['focus'] }}</p>
        <div class="mt-5 flex flex-wrap gap-2">
            @foreach ($certificate['tags'] as $tag)
                <span class="code-chip">{{ $tag }}</span>
            @endforeach
        </div>
        <p class="mt-5 font-mono text-xs font-bold uppercase tracking-[0.16em] text-paper/46">{{ $certificate['date'] }}</p>
    </div>
</article>
