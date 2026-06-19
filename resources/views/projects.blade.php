@extends('layouts.site')

@section('title', 'Past Projects - '.$profile['name'])
@section('description', 'Past projects and portfolio case studies for '.$profile['name'].'.')

@section('content')
    <main class="tech-section pt-16">
        <section class="border-b border-line py-20 sm:py-24">
            <div class="section-shell grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:items-end">
                <div>
                    <p class="eyebrow">~/projects</p>
                    <h1 class="mt-4 font-display text-5xl font-extrabold uppercase leading-[0.92] text-paper sm:text-6xl">GitHub-backed technical portfolio.</h1>
                </div>
                <div class="tech-panel">
                    <div class="terminal-bar">
                        <span>github.remote</span>
                        <span class="text-terminal">connected</span>
                    </div>
                    <div class="p-6">
                        <p class="font-mono text-sm leading-8 text-paper/72">Featured project work across digital forensics, Android development, secure frontend engineering, network architecture simulation, and academic programming repositories.</p>
                        <a href="https://github.com/ShinjiTakeru00" class="btn-primary mt-7">
                            <i data-lucide="github" class="size-4"></i>
                            github.com/ShinjiTakeru00
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="border-b border-line bg-panel/54 py-20 sm:py-24">
            <div class="section-shell space-y-5">
                @foreach ($projects as $project)
                    <article class="tech-card grid overflow-hidden lg:grid-cols-[0.48fr_1fr]">
                        <div class="flex min-h-72 flex-col justify-between border-b border-line bg-ink p-6 lg:border-b-0 lg:border-r">
                            <div class="flex items-center justify-between gap-4 font-mono text-xs font-bold uppercase tracking-[0.16em] text-paper/46">
                                <span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                <span>{{ $project['year'] }}</span>
                            </div>
                            @if ($project['image'])
                                <figure class="my-6 overflow-hidden border border-line bg-panel">
                                    <div class="aspect-[16/10]">
                                        <img src="{{ asset($project['image']) }}" alt="{{ $project['image_alt'] }}" class="h-full w-full {{ $project['image_fit'] === 'contain' ? 'object-contain p-5' : 'object-cover' }}">
                                    </div>
                                    @if ($project['image_credit'])
                                        <figcaption class="border-t border-line px-3 py-2 font-mono text-[10px] uppercase tracking-[0.14em] text-paper/42">{{ $project['image_credit'] }}</figcaption>
                                    @endif
                                </figure>
                            @endif
                            <div>
                                <p class="font-mono text-xs font-bold uppercase tracking-[0.16em] text-terminal">{{ $project['type'] }}</p>
                                <h2 class="mt-3 font-display text-3xl font-extrabold leading-tight text-paper">{{ $project['title'] }}</h2>
                            </div>
                        </div>
                        <div class="grid gap-8 p-6 lg:grid-cols-[1fr_0.42fr]">
                            <div>
                                <p class="leading-8 text-paper/70">{{ $project['description'] }}</p>
                                <p class="mt-5 leading-8 text-paper/70">{{ $project['outcome'] }}</p>
                                <ul class="mt-6 space-y-3">
                                    @foreach ($project['bullets'] as $bullet)
                                        <li class="flex gap-3 leading-7 text-paper/66">
                                            <span class="mt-3 size-1.5 shrink-0 bg-terminal"></span>
                                            <span>{{ $bullet }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="mt-7 flex flex-wrap gap-3">
                                    @if ($project['repo_url'])
                                        <a href="{{ $project['repo_url'] }}" class="btn-secondary">
                                            <i data-lucide="github" class="size-4"></i>
                                            open repo
                                        </a>
                                    @endif
                                    @foreach ($project['repo_links'] as $repoLink)
                                        <a href="{{ $repoLink['url'] }}" class="inline-flex min-h-10 items-center justify-center border border-line bg-ink px-4 font-mono text-xs font-bold text-paper/68 transition hover:border-terminal hover:bg-terminal hover:text-ink">{{ $repoLink['label'] }}</a>
                                    @endforeach
                                </div>
                            </div>
                            <aside class="border border-line bg-ink/70 p-5">
                                <p class="font-mono text-xs font-bold uppercase tracking-[0.18em] text-terminal">role</p>
                                <p class="mt-2 font-display text-xl font-extrabold text-paper">{{ $project['role'] }}</p>
                                <p class="mt-6 font-mono text-xs font-bold uppercase tracking-[0.18em] text-terminal">status</p>
                                <p class="mt-2 font-display text-xl font-extrabold text-paper">{{ $project['status'] }}</p>
                                <div class="mt-6 flex flex-wrap gap-2">
                                    @foreach ($project['tags'] as $tag)
                                        <span class="code-chip">{{ $tag }}</span>
                                    @endforeach
                                </div>
                            </aside>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

        <section class="border-b border-line py-20 sm:py-24">
            <div class="section-shell">
                <div class="grid gap-8 lg:grid-cols-[0.75fr_1.25fr] lg:items-end">
                    <div>
                        <p class="eyebrow">~/github-archive</p>
                        <h2 class="mt-3 font-display text-4xl font-extrabold leading-tight text-paper">Public repositories worth browsing.</h2>
                    </div>
                    <p class="max-w-2xl leading-8 text-paper/68 lg:justify-self-end">Fetched from Evan's public GitHub profile and grouped so recruiters can inspect the broader project history beyond the featured case studies.</p>
                </div>
                <div class="mt-10 grid gap-px border border-line bg-line md:grid-cols-2 xl:grid-cols-3">
                    @foreach ($githubRepos as $repo)
                        <article class="bg-panel p-5 transition hover:bg-ink">
                            <div class="flex items-start justify-between gap-4">
                                <h3 class="font-display text-xl font-extrabold text-paper">{{ $repo['name'] }}</h3>
                                <a href="{{ $repo['url'] }}" aria-label="Open {{ $repo['name'] }} on GitHub" class="inline-flex size-9 shrink-0 items-center justify-center border border-line text-paper/74 transition hover:border-terminal hover:bg-terminal hover:text-ink">
                                    <i data-lucide="arrow-up-right" class="size-4"></i>
                                </a>
                            </div>
                            <p class="mt-3 min-h-20 leading-7 text-paper/64">{{ $repo['description'] }}</p>
                            <p class="mt-5 font-mono text-xs font-bold uppercase tracking-[0.16em] text-cyan">{{ $repo['language'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="py-20 sm:py-24">
            <div class="section-shell flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <p class="eyebrow">~/next</p>
                    <h2 class="mt-3 font-display text-4xl font-extrabold leading-tight text-paper">Need the background behind the repos?</h2>
                </div>
                <a href="{{ route('about') }}" class="btn-primary">
                    cat about.md
                    <i data-lucide="arrow-up-right" class="size-4"></i>
                </a>
            </div>
        </section>
    </main>
@endsection
