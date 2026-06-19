@extends('layouts.site')

@section('title', $profile['name'].' - Portfolio')
@section('description', 'Information technology, software development, networking, and technical project portfolio for '.$profile['name'].'.')

@section('content')
    <main id="top" class="tech-section">
        <section class="relative min-h-screen overflow-hidden pt-16">
            <img src="{{ asset('images/portfolio-hero.png') }}" alt="" class="absolute right-0 top-16 h-[44rem] w-[44rem] max-w-none object-cover opacity-[0.08] mix-blend-screen">
            <div class="absolute inset-0 scanline opacity-60"></div>
            <div class="section-shell relative grid min-h-[calc(100vh-4rem)] gap-10 pb-16 pt-14 lg:grid-cols-[0.9fr_1.1fr] lg:items-center">
                <div>
                    <p class="eyebrow">evan@portfolio:~$ whoami</p>
                    <h1 class="mt-6 font-display text-6xl font-extrabold uppercase leading-[0.86] tracking-[0.02em] text-paper sm:text-7xl lg:text-8xl">
                        Evan<br>
                        Darya<br>
                        Kusuma
                    </h1>
                    <div class="mt-8 grid max-w-xl grid-cols-2 border border-line font-mono text-xs text-paper/72 sm:grid-cols-4">
                        <div class="border-b border-line p-4 sm:border-b-0 sm:border-r">
                            <p class="text-terminal">focus</p>
                            <p class="mt-1">IT systems</p>
                        </div>
                        <div class="border-b border-line p-4 sm:border-b-0 sm:border-r">
                            <p class="text-terminal">base</p>
                            <p class="mt-1">Surabaya</p>
                        </div>
                        <div class="border-r border-line p-4">
                            <p class="text-terminal">repos</p>
                            <p class="mt-1">12 public</p>
                        </div>
                        <div class="p-4">
                            <p class="text-terminal">status</p>
                            <p class="mt-1">open</p>
                        </div>
                    </div>
                </div>

                <div class="tech-panel">
                    <div class="terminal-bar">
                        <span>~/profile/readme.md</span>
                        <span class="flex gap-1.5">
                            <span class="terminal-dot bg-ember"></span>
                            <span class="terminal-dot bg-brass"></span>
                            <span class="terminal-dot bg-terminal"></span>
                        </span>
                    </div>
                    <div class="p-6 sm:p-8">
                        <p class="font-mono text-sm text-cyan"># Hello</p>
                        <h2 class="mt-4 font-display text-3xl font-extrabold leading-tight text-paper sm:text-4xl">{{ $profile['role'] }}</h2>
                        <p class="mt-5 max-w-2xl text-base leading-8 text-paper/74">{{ $profile['intro'] }}</p>
                        <div class="mt-7 space-y-3 font-mono text-sm text-paper/72">
                            <p><span class="text-terminal">$</span> interests --mobile --web --networking --analysis</p>
                            <p><span class="text-terminal">$</span> location --{{ $profile['location'] }}</p>
                            <p><span class="text-terminal">$</span> email --{{ $profile['email'] }}</p>
                        </div>
                        <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                            <a href="{{ route('projects') }}" class="btn-primary">
                                ./open-projects
                                <i data-lucide="arrow-up-right" class="size-4"></i>
                            </a>
                            <a href="{{ route('about') }}" class="btn-secondary">cat about.md</a>
                            <a href="mailto:{{ $profile['email'] }}?subject=Resume%20request" class="btn-secondary">request resume</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="work" class="border-y border-line bg-panel/54 py-20 sm:py-24">
            <div class="section-shell">
                <div class="grid gap-8 lg:grid-cols-[0.8fr_1.2fr] lg:items-end">
                    <div>
                        <p class="eyebrow">~/projects</p>
                    <h2 class="mt-3 font-display text-4xl font-extrabold leading-tight text-paper sm:text-5xl">Selected technical work.</h2>
                    </div>
                    <p class="max-w-2xl text-base leading-8 text-paper/68 lg:justify-self-end">A tighter project surface for mobile apps, web products, network labs, analysis work, and GitHub-backed coursework.</p>
                </div>

                <div class="mt-12 grid gap-4 md:grid-cols-2 xl:grid-cols-3">
                    @foreach ($projects as $project)
                        <article class="tech-card p-5">
                            @if ($project['image'])
                                <div class="mb-5 aspect-[16/10] overflow-hidden border border-line bg-ink">
                                    <img src="{{ asset($project['image']) }}" alt="{{ $project['image_alt'] }}" class="h-full w-full {{ $project['image_fit'] === 'contain' ? 'object-contain p-5' : 'object-cover' }}">
                                </div>
                            @endif
                            <div class="flex items-start justify-between gap-4">
                                <div>
                                    <p class="font-mono text-xs font-bold uppercase tracking-[0.16em] text-terminal">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }} / {{ $project['year'] }}</p>
                                    <h3 class="mt-3 font-display text-2xl font-extrabold leading-tight text-paper">{{ $project['title'] }}</h3>
                                </div>
                                <span class="border border-line bg-ink px-2 py-1 font-mono text-[10px] font-bold uppercase text-cyan">{{ $project['role'] }}</span>
                            </div>
                            <p class="mt-4 min-h-28 leading-7 text-paper/66">{{ $project['description'] }}</p>
                            <div class="mt-5 flex flex-wrap gap-2">
                                @foreach (array_slice($project['tags'], 0, 4) as $tag)
                                    <span class="code-chip">{{ $tag }}</span>
                                @endforeach
                            </div>
                            @if ($project['image_credit'])
                                <p class="mt-4 font-mono text-[10px] uppercase tracking-[0.14em] text-paper/42">{{ $project['image_credit'] }}</p>
                            @endif
                        </article>
                    @endforeach
                </div>

                <div class="mt-10">
                    <a href="{{ route('projects') }}" class="btn-secondary">
                        browse full repo archive
                        <i data-lucide="arrow-up-right" class="size-4"></i>
                    </a>
                </div>
            </div>
        </section>

        <section id="skills" class="py-20 sm:py-24">
            <div class="section-shell grid gap-12 lg:grid-cols-[0.8fr_1.2fr]">
                <div>
                    <p class="eyebrow">~/capabilities</p>
                    <h2 class="mt-3 font-display text-4xl font-extrabold leading-tight text-paper sm:text-5xl">Five practical capability areas.</h2>
                    <p class="mt-5 leading-8 text-paper/68">A broader view of the work Evan can contribute to: software, networks, analysis, and team execution. Expand each item for tools and details.</p>
                </div>
                <div class="space-y-3">
                    @foreach ($skillGroups as $group)
                        @include('partials.capability-panel', ['group' => $group])
                    @endforeach
                </div>
            </div>
        </section>

        <section id="about" class="border-y border-line bg-panel/54 py-20 sm:py-24">
            <div class="section-shell grid gap-12 lg:grid-cols-[0.85fr_1.15fr]">
                <div>
                    <p class="eyebrow">~/about</p>
                    <h2 class="mt-3 font-display text-4xl font-extrabold leading-tight text-paper sm:text-5xl">From IT coursework to shipped technical projects.</h2>
                    <p class="mt-6 leading-8 text-paper/68">Evan combines mobile development training, networking practice, technical analysis, and organizational leadership experience from ITS, HMIT, Bangkit Academy, and university-scale programs.</p>
                    <a href="{{ route('about') }}" class="btn-primary mt-7">open about.md</a>
                </div>
                <div class="space-y-4">
                    @foreach ($timeline as $item)
                        <article class="tech-panel p-5">
                            <p class="font-mono text-sm font-bold text-terminal">{{ $item['year'] }}</p>
                            <h3 class="mt-2 font-display text-xl font-extrabold text-paper">{{ $item['title'] }}</h3>
                            <p class="mt-2 leading-7 text-paper/66">{{ $item['detail'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="contact" class="py-20 sm:py-24">
            <div class="section-shell grid gap-10 lg:grid-cols-[1fr_0.8fr] lg:items-center">
                <div>
                    <p class="eyebrow">~/contact</p>
                    <h2 class="mt-3 font-display text-4xl font-extrabold leading-tight text-paper sm:text-5xl">Open to software, IT, network, and technical analyst opportunities.</h2>
                    <p class="mt-5 max-w-2xl text-lg leading-8 text-paper/70">Reach out for mobile or web development, network-focused work, technical documentation, project coordination, or entry-level IT roles.</p>
                </div>
                <div class="flex flex-col gap-3">
                    <a href="mailto:{{ $profile['email'] }}" class="btn-primary">
                        <i data-lucide="mail" class="size-4"></i>
                        {{ $profile['email'] }}
                    </a>
                    @foreach ($profile['links'] as $link)
                        <a href="{{ $link['url'] }}" class="btn-secondary">{{ $link['label'] }}</a>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
