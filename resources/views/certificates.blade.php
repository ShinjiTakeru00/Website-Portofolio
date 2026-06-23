@extends('layouts.site')

@section('title', 'Certificates - '.$profile['name'])
@section('description', 'Selected certificates and professional training credentials for '.$profile['name'].'.')

@section('content')
    <main class="tech-section pt-16">
        <section class="border-b border-line py-20 sm:py-24">
            <div class="section-shell grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:items-end">
                <div>
                    <p class="eyebrow">~/certificates</p>
                    <h1 class="mt-4 font-display text-5xl font-extrabold uppercase leading-[0.92] text-paper sm:text-6xl">Training credentials and proof of practice.</h1>
                </div>
                <div class="tech-panel">
                    <div class="terminal-bar">
                        <span>credential.index</span>
                        <span class="text-terminal">verified</span>
                    </div>
                    <div class="p-6">
                        <p class="font-mono text-sm leading-8 text-paper/72">A focused credential archive for Android development, Kotlin, maintainable programming principles, and Git-based collaboration.</p>
                        <div class="mt-6 grid gap-px border border-line bg-line sm:grid-cols-3">
                            <div class="bg-ink p-4">
                                <p class="font-display text-3xl font-extrabold text-paper">{{ count($certificates) }}</p>
                                <p class="mt-1 font-mono text-xs uppercase tracking-[0.14em] text-paper/48">selected</p>
                            </div>
                            <div class="bg-ink p-4">
                                <p class="font-display text-3xl font-extrabold text-paper">{{ count($skillGroups) }}</p>
                                <p class="mt-1 font-mono text-xs uppercase tracking-[0.14em] text-paper/48">capability areas</p>
                            </div>
                            <div class="bg-ink p-4">
                                <p class="font-display text-3xl font-extrabold text-paper">PDF</p>
                                <p class="mt-1 font-mono text-xs uppercase tracking-[0.14em] text-paper/48">source proofs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="border-b border-line bg-panel/54 py-20 sm:py-24">
            <div class="section-shell">
                <div class="grid gap-8 lg:grid-cols-[0.75fr_1.25fr] lg:items-end">
                    <div>
                        <p class="eyebrow">~/featured</p>
                        <h2 class="mt-3 font-display text-4xl font-extrabold leading-tight text-paper">Most relevant credentials.</h2>
                    </div>
                    <p class="max-w-2xl leading-8 text-paper/68 lg:justify-self-end">Prioritized around mobile development, clean software design, and collaborative engineering workflow.</p>
                </div>
                <div class="mt-10 grid gap-4 md:grid-cols-2 xl:grid-cols-3">
                    @foreach ($certificates as $certificate)
                        @include('partials.certificate-card', ['certificate' => $certificate])
                    @endforeach
                </div>
            </div>
        </section>

        <section class="py-20 sm:py-24">
            <div class="section-shell grid gap-10 lg:grid-cols-[0.7fr_1.3fr]">
                <div>
                    <p class="eyebrow">~/mapping</p>
                    <h2 class="mt-3 font-display text-4xl font-extrabold leading-tight text-paper">How these credentials support the portfolio.</h2>
                </div>
                <div class="grid gap-px border border-line bg-line md:grid-cols-3">
                    <article class="bg-panel p-5">
                        <p class="font-mono text-xs font-bold uppercase tracking-[0.16em] text-terminal">mobile</p>
                        <h3 class="mt-3 font-display text-xl font-extrabold text-paper">Android delivery</h3>
                        <p class="mt-3 leading-7 text-paper/64">Android Intermediate, Android Fundamentals, and Kotlin support the Speaktoo mobile capstone story.</p>
                    </article>
                    <article class="bg-panel p-5">
                        <p class="font-mono text-xs font-bold uppercase tracking-[0.16em] text-terminal">engineering</p>
                        <h3 class="mt-3 font-display text-xl font-extrabold text-paper">Maintainable code</h3>
                        <p class="mt-3 leading-7 text-paper/64">SOLID training reinforces code structure, clean design, and long-term maintainability.</p>
                    </article>
                    <article class="bg-panel p-5">
                        <p class="font-mono text-xs font-bold uppercase tracking-[0.16em] text-terminal">workflow</p>
                        <h3 class="mt-3 font-display text-xl font-extrabold text-paper">Version control</h3>
                        <p class="mt-3 leading-7 text-paper/64">Git/GitHub training supports collaborative work across capstone, coursework, and portfolio repositories.</p>
                    </article>
                </div>
            </div>
        </section>
    </main>
@endsection
