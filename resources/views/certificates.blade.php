@extends('layouts.site')

@section('title', 'Certificates - '.$profile['name'])
@section('description', 'Certificate archive and CV skill map for '.$profile['name'].'.')

@section('content')
    <main class="tech-section pt-16">
        <section class="border-b border-line py-20 sm:py-24">
            <div class="section-shell">
                <div class="max-w-4xl">
                    <p class="eyebrow">~/certificates</p>
                    <h1 class="mt-4 font-display text-5xl font-extrabold uppercase leading-[0.92] text-paper sm:text-6xl">Certificate archive and CV skill map.</h1>
                    <p class="mt-6 max-w-2xl leading-8 text-paper/68">Skills are mapped from the CV and paired with all available certificate proofs in the local certificate archive.</p>
                </div>
                <div class="tech-panel mt-10">
                    <div class="terminal-bar">
                        <span>cv.skills</span>
                        <span class="text-terminal">loaded</span>
                    </div>
                    <div class="p-6">
                        <div class="grid gap-3 md:grid-cols-2 xl:grid-cols-4">
                            @foreach ($cvSkills as $skillGroup)
                                <article class="border border-line bg-ink p-4">
                                    <h2 class="font-mono text-xs font-bold uppercase tracking-[0.16em] text-terminal">{{ $skillGroup['title'] }}</h2>
                                    <div class="mt-4 flex flex-wrap gap-2">
                                        @foreach ($skillGroup['items'] as $skill)
                                            <span class="code-chip">{{ $skill }}</span>
                                        @endforeach
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="border-b border-line bg-panel/54 py-20 sm:py-24">
            <div class="section-shell">
                <div class="grid gap-8 lg:grid-cols-[0.75fr_1.25fr] lg:items-end">
                    <div>
                        <p class="eyebrow">~/archive</p>
                        <h2 class="mt-3 font-display text-4xl font-extrabold leading-tight text-paper">All certificate covers.</h2>
                    </div>
                    <p class="max-w-2xl leading-8 text-paper/68 lg:justify-self-end">Each certificate starts as a cover card. Open a card to view its focus, tags, date, and original PDF proof.</p>
                </div>
                <div class="mt-10 grid gap-4 md:grid-cols-2 xl:grid-cols-3">
                    @foreach ($certificates as $certificate)
                        @include('partials.certificate-card', ['certificate' => $certificate])
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
