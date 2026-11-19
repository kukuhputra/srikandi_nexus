<!DOCTYPE html>
<html lang="id" class="dark h-full bg-[#090e1a]">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Srikandi Nexus') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :root { color-scheme: dark; }
        body { background: #090e1a; background-image: radial-gradient(ellipse at 15% 20%,rgba(0,203,255,.12),transparent 42%),radial-gradient(ellipse at 85% 80%,rgba(37,99,235,.15),transparent 45%); }
        .glass { backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); background: rgba(15,23,42,.70); border: 1px solid rgba(51,65,85,.5); }
    </style>
</head>
<body class="min-h-full text-slate-100 antialiased flex flex-col justify-between">
    <div class="min-h-screen flex flex-col">
        @include('layouts.app-header')

        <main class="flex-1 max-w-7xl w-full mx-auto px-6 py-8">
            {{ $slot }}
        </main>

        <footer class="border-t border-slate-800/80 bg-slate-950/60 py-4 px-6 text-center text-xs font-mono text-slate-500">
            <div class="max-w-7xl mx-auto flex items-center justify-between">
                <span>SYS.NODE // SRIKANDI-NEXUS</span>
                <span class="text-emerald-400">● SECURE SSL / PG17 ONLINE</span>
            </div>
        </footer>
    </div>
</body>
</html>
