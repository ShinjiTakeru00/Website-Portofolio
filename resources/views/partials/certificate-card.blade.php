<details class="certificate-tab tech-card group overflow-hidden">
    <summary class="certificate-summary">
        <div class="aspect-[16/11] overflow-hidden border-b border-line bg-ink">
            <img src="{{ asset($certificate['image']) }}" alt="{{ $certificate['title'] }} certificate preview" class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.03]">
        </div>
        <div class="p-5">
            <div>
                <p class="font-mono text-xs font-bold uppercase tracking-[0.16em] text-terminal">{{ $certificate['issuer'] }}</p>
                <h3 class="mt-3 font-display text-xl font-extrabold leading-tight text-paper">{{ $certificate['title'] }}</h3>
            </div>
            <div class="mt-5 flex items-center justify-between gap-4">
                <span class="font-mono text-xs font-bold uppercase tracking-[0.14em] text-paper/46">{{ $certificate['date'] }}</span>
                <span class="certificate-toggle">details</span>
            </div>
        </div>
    </summary>
    <div class="border-t border-line p-5">
        <p class="mt-4 leading-7 text-paper/64">{{ $certificate['focus'] }}</p>
        <div class="mt-5 flex flex-wrap gap-2">
            @foreach ($certificate['tags'] as $tag)
                <span class="code-chip">{{ $tag }}</span>
            @endforeach
        </div>
        <a href="{{ asset($certificate['pdf']) }}" target="_blank" rel="noreferrer" class="btn-secondary mt-6 w-full">
            open PDF
            <i data-lucide="arrow-up-right" class="size-4"></i>
        </a>
    </div>
</details>
