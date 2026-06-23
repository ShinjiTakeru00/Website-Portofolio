@extends('layouts.site')

@section('title', 'About - '.$profile['name'])
@section('description', 'About '.$profile['name'].', an Information Technology graduate focused on software development, networking, technical analysis, and project coordination.')

@section('content')
    <main class="tech-section pt-16">
        <section class="border-b border-line py-20 sm:py-24">
            <div class="section-shell grid gap-12 lg:grid-cols-[0.9fr_1.1fr] lg:items-end">
                <div>
                    <p class="eyebrow">~/about.md</p>
                    <h1 class="mt-4 font-display text-5xl font-extrabold uppercase leading-[0.92] text-paper sm:text-6xl">Software, networks, analysis, and practical delivery.</h1>
                </div>
                <div class="tech-panel">
                    <div class="terminal-bar">
                        <span>profile.json</span>
                        <span class="text-terminal">valid</span>
                    </div>
                    <div class="p-6 font-mono text-sm leading-8 text-paper/74">
                        <p><span class="text-terminal">name:</span> {{ $profile['name'] }}</p>
                        <p><span class="text-terminal">role:</span> {{ $profile['role'] }}</p>
                        <p><span class="text-terminal">location:</span> {{ $profile['location'] }}</p>
                        <p><span class="text-terminal">summary:</span> {{ $profile['intro'] }}</p>
                        <div class="mt-6 flex flex-col gap-3 sm:flex-row">
                            <a href="mailto:{{ $profile['email'] }}" class="btn-primary">
                                <i data-lucide="mail" class="size-4"></i>
                                email
                            </a>
                            <a href="mailto:{{ $profile['email'] }}?subject=Resume%20request" class="btn-secondary">request resume</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="border-b border-line bg-panel/54 py-20 sm:py-24">
            <div class="section-shell grid gap-12 lg:grid-cols-[0.75fr_1.25fr]">
                <div>
                    <p class="eyebrow">~/principles</p>
                    <h2 class="mt-3 font-display text-4xl font-extrabold leading-tight text-paper">Systems-minded, security-aware, delivery-focused.</h2>
                    <p class="mt-5 leading-8 text-paper/68">The resume points to a hybrid profile: software development, networking labs, structured technical analysis, and organizational leadership.</p>
                </div>
                <div class="grid gap-4 md:grid-cols-3">
                    @foreach ($principles as $principle)
                        <article class="tech-card p-5">
                            <h3 class="font-display text-xl font-extrabold text-paper">{{ $principle['title'] }}</h3>
                            <p class="mt-3 leading-7 text-paper/66">{{ $principle['detail'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="border-b border-line py-20 sm:py-24">
            <div class="section-shell grid gap-12 lg:grid-cols-[0.8fr_1.2fr]">
                <div>
                    <p class="eyebrow">~/education</p>
                    <h2 class="mt-3 font-display text-4xl font-extrabold leading-tight text-paper">Academic foundation and professional training.</h2>
                </div>
                <div class="space-y-4">
                    @foreach ($education as $item)
                        <article class="tech-panel p-5">
                            <div class="flex flex-col gap-2 sm:flex-row sm:items-start sm:justify-between">
                                <div>
                                    <h3 class="font-display text-2xl font-extrabold text-paper">{{ $item['school'] }}</h3>
                                    <p class="mt-1 font-mono text-sm font-bold text-terminal">{{ $item['degree'] }}</p>
                                </div>
                                <p class="font-mono text-xs font-bold uppercase tracking-[0.14em] text-paper/50">{{ $item['period'] }}</p>
                            </div>
                            <p class="mt-4 leading-7 text-paper/68">{{ $item['detail'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="certificates" class="border-b border-line bg-panel/54 py-20 sm:py-24">
            <div class="section-shell">
                <div class="grid gap-8 lg:grid-cols-[0.75fr_1.25fr] lg:items-end">
                    <div>
                        <p class="eyebrow">~/certificates</p>
                        <h2 class="mt-3 font-display text-4xl font-extrabold leading-tight text-paper">Selected certificates.</h2>
                    </div>
                    <p class="max-w-2xl leading-8 text-paper/68 lg:justify-self-end">The most relevant credentials for mobile development, maintainable programming practice, and collaborative Git-based delivery.</p>
                </div>
                <div class="mt-10 grid gap-4 md:grid-cols-2 xl:grid-cols-3">
                    @foreach ($certificates as $certificate)
                        @include('partials.certificate-card', ['certificate' => $certificate])
                    @endforeach
                </div>
            </div>
        </section>

        <section class="border-b border-line bg-panel/54 py-20 sm:py-24">
            <div class="section-shell grid gap-12 lg:grid-cols-[0.75fr_1.25fr]">
                <div>
                    <p class="eyebrow">~/experience</p>
                    <h2 class="mt-3 font-display text-4xl font-extrabold leading-tight text-paper">Leadership and operational systems.</h2>
                </div>
                <div class="space-y-4">
                    @foreach ($experiences as $experience)
                        <article class="tech-card p-5">
                            <div class="flex flex-col gap-2 sm:flex-row sm:items-start sm:justify-between">
                                <div>
                                    <h3 class="font-display text-2xl font-extrabold text-paper">{{ $experience['organization'] }}</h3>
                                    <p class="mt-1 font-mono text-sm font-bold text-terminal">{{ $experience['role'] }}</p>
                                </div>
                                <p class="font-mono text-xs font-bold uppercase tracking-[0.14em] text-paper/50">{{ $experience['period'] }}</p>
                            </div>
                            <ul class="mt-5 space-y-3">
                                @foreach ($experience['details'] as $detail)
                                    <li class="flex gap-3 leading-7 text-paper/68">
                                        <span class="mt-3 size-1.5 shrink-0 bg-terminal"></span>
                                        <span>{{ $detail }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="border-b border-line py-20 sm:py-24">
            <div class="section-shell">
                <div class="grid gap-8 lg:grid-cols-[0.75fr_1.25fr] lg:items-end">
                    <div>
                        <p class="eyebrow">~/capabilities</p>
                        <h2 class="mt-3 font-display text-4xl font-extrabold leading-tight text-paper">Five expandable capability areas.</h2>
                    </div>
                    <p class="max-w-2xl leading-8 text-paper/68 lg:justify-self-end">Grouped for quick scanning without over-positioning around one specialty. Expand each area to see tools, methods, and supporting skills.</p>
                </div>
                <div class="mt-10 space-y-3">
                    @foreach ($skillGroups as $group)
                        @include('partials.capability-panel', ['group' => $group])
                    @endforeach
                </div>
            </div>
        </section>

        <section class="py-20 sm:py-24">
            <div class="section-shell grid gap-12 lg:grid-cols-2">
                <div>
                    <p class="eyebrow">~/services</p>
                    <h2 class="mt-3 font-display text-4xl font-extrabold leading-tight text-paper">Work areas aligned with the resume.</h2>
                    <div class="mt-8 grid gap-px border border-line bg-line">
                        @foreach ($services as $service)
                            <div class="bg-panel px-5 py-4 font-mono text-sm font-bold text-paper/72">{{ $service }}</div>
                        @endforeach
                    </div>
                </div>
                <div>
                    <p class="eyebrow">~/contact</p>
                    <div class="mt-8 tech-panel p-6">
                        <p class="font-mono text-xs uppercase tracking-[0.18em] text-terminal">communication</p>
                        @foreach ($languages as $language)
                            <p class="mt-4 font-mono text-sm text-paper/72">{{ $language }}</p>
                        @endforeach
                        <div class="mt-8 border-t border-line pt-6">
                            <p class="font-display text-2xl font-extrabold text-paper">{{ $profile['email'] }}</p>
                            <p class="mt-2 font-mono text-sm text-paper/58">{{ $profile['phone'] }} | {{ $profile['location'] }}</p>
                        </div>
                    </div>
                    <a href="{{ route('projects') }}" class="btn-primary mt-6">
                        open projects
                        <i data-lucide="arrow-up-right" class="size-4"></i>
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection
