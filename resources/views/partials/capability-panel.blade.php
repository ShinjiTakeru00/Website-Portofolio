<details class="tech-card group" @if ($loop->first) open @endif>
    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 p-5">
        <span>
            <span class="font-mono text-xs font-bold uppercase tracking-[0.16em] text-terminal">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
            <span class="mt-2 block font-display text-2xl font-extrabold text-paper">{{ $group['title'] }}</span>
        </span>
        <span class="font-mono text-xl text-paper/50 transition group-open:rotate-45">+</span>
    </summary>
    <div class="border-t border-line px-5 pb-5">
        <div class="grid gap-5 pt-5 md:grid-cols-[0.48fr_1fr]">
            @if ($group['image'])
                <figure class="overflow-hidden border border-line bg-ink">
                    <div class="aspect-[16/11]">
                        <img src="{{ asset($group['image']) }}" alt="{{ $group['image_alt'] }}" class="h-full w-full {{ $group['image_fit'] === 'contain' ? 'object-contain p-5' : 'object-cover' }}">
                    </div>
                </figure>
            @endif
            <p class="leading-7 text-paper/68">{{ $group['summary'] }}</p>
        </div>
        <p class="mt-5 font-mono text-xs font-bold uppercase tracking-[0.16em] text-terminal">show all types</p>
        <div class="mt-3 grid gap-3">
            @foreach ($group['types'] as $type)
                <article class="border border-line bg-ink/70 p-4">
                    <div class="flex flex-col gap-2 sm:flex-row sm:items-start sm:justify-between">
                        <h4 class="font-display text-lg font-extrabold text-paper">{{ $type['name'] }}</h4>
                        <span class="font-mono text-[10px] font-bold uppercase tracking-[0.14em] text-paper/45">type/{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                    </div>
                    <p class="mt-3 leading-7 text-paper/64">{{ $type['detail'] }}</p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        @foreach ($type['tools'] as $tool)
                            <span class="code-chip">{{ $tool }}</span>
                        @endforeach
                    </div>
                </article>
            @endforeach
        </div>
        <div class="mt-5 flex flex-wrap gap-2 border-t border-line pt-5">
            @foreach ($group['items'] as $item)
                <span class="code-chip">{{ $item }}</span>
            @endforeach
        </div>
    </div>
</details>
