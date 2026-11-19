<header class="sticky top-0 z-50 flex w-full shrink-0 border-b border-slate-800 bg-slate-950/80 backdrop-blur-md">
    <div class="flex grow items-center justify-between px-6 py-4 max-w-7xl mx-auto w-full">
        <div class="flex items-center gap-3">
            <span class="inline-flex rounded-full border border-cyan-400/20 bg-cyan-400/10 px-3 py-1 text-[11px] font-semibold uppercase tracking-[.18em] text-cyan-300">Srikandi Nexus</span>
            <span class="text-xs font-mono text-slate-400">// Enterprise Workspace</span>
        </div>
        <div class="flex items-center gap-4">
            <div class="hidden sm:flex items-center gap-3 text-xs font-mono">
                <span class="rounded-md border border-slate-700/60 bg-slate-900/90 px-2.5 py-1 text-cyan-300">UNIT: {{ strtoupper(Auth::user()->group_name ?? 'ALL') }}</span>
                <span class="rounded-md border border-slate-700/60 bg-slate-900/90 px-2.5 py-1 text-emerald-300">ROLE: {{ strtoupper(Auth::user()->sub_group ?? 'ADMIN') }}</span>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="rounded-lg border border-rose-500/30 bg-rose-500/10 px-3.5 py-2 text-xs font-semibold text-rose-300 transition hover:bg-rose-500/20">
                    Logout
                </button>
            </form>
        </div>
    </div>
</header>
