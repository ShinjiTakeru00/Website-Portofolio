<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description', 'Cybersecurity, digital forensics, and secure software engineering portfolio.')">
    <title>@yield('title', $profile['name'].' - Portfolio')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <div class="route-loader" data-route-loader aria-hidden="true">
        <div class="route-loader-panel">
            <div class="terminal-bar">
                <span>system/navigation</span>
                <span class="text-terminal">loading</span>
            </div>
            <div class="p-5">
                <p class="font-mono text-xs uppercase tracking-[0.18em] text-terminal">compiling route</p>
                <div class="mt-4 h-2 overflow-hidden border border-line bg-ink">
                    <span class="route-loader-bar"></span>
                </div>
                <p class="mt-4 font-mono text-sm text-paper/72">mounting blade view...</p>
            </div>
        </div>
    </div>

    <header class="fixed inset-x-0 top-0 z-50 border-b border-line bg-ink/88 text-paper backdrop-blur">
        <nav class="section-shell flex min-h-16 items-center justify-between gap-4">
            <a href="{{ route('home') }}" class="font-mono text-sm font-extrabold tracking-[0.18em] text-terminal">evan.dk</a>
            <button type="button" class="inline-flex size-10 items-center justify-center border border-line bg-panel md:hidden" data-nav-toggle aria-expanded="false" aria-controls="site-nav" aria-label="Toggle navigation">
                <i data-lucide="menu" class="size-5"></i>
            </button>
            <div id="site-nav" data-nav-menu class="absolute left-5 right-5 top-20 hidden gap-3 border border-line bg-panel p-4 shadow-soft md:static md:flex md:border-0 md:bg-transparent md:p-0 md:shadow-none">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'text-terminal' : 'text-paper/68' }}">~/home</a>
                <a href="{{ route('projects') }}" class="nav-link {{ request()->routeIs('projects') ? 'text-terminal' : 'text-paper/68' }}">~/projects</a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'text-terminal' : 'text-paper/68' }}">~/about</a>
                <a href="{{ route('home') }}#contact" class="nav-link text-paper/68">~/contact</a>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer class="border-t border-line bg-ink py-8 text-paper/62">
        <div class="section-shell flex flex-col gap-3 font-mono text-xs sm:flex-row sm:items-center sm:justify-between">
            <p>&copy; {{ date('Y') }} {{ $profile['name'] }}. Portfolio.</p>
            <p>stack: Laravel / Blade / Vite / Tailwind</p>
        </div>
    </footer>
</body>
</html>
