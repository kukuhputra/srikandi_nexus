<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    @if ($errors->any())
      <div class="mb-5 rounded-lg border border-rose-500/30 bg-rose-950/40 px-4 py-3 text-xs text-rose-300 text-center mono">
          ⚠️ {{ $errors->first() }}
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <div class="space-y-1.5">
            <label class="text-xs font-semibold uppercase tracking-wider text-cyan-400">Username Operator</label>
            <input id="username" name="username" type="text" value="{{ old('username') }}" required autofocus autocomplete="username" placeholder="kukuh" class="w-full input-marine rounded-xl px-4 py-3 text-sm mono text-white bg-slate-950/90 border border-cyan-500/30 focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400/40 outline-none">
        </div>

        <div class="space-y-1.5">
            <label class="text-xs font-semibold uppercase tracking-wider text-cyan-400">Access Key / Password</label>
            <input id="password" name="password" type="password" required autocomplete="current-password" placeholder="••••••••••••" class="w-full input-marine rounded-xl px-4 py-3 text-sm mono text-white bg-slate-950/90 border border-cyan-500/30 focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400/40 outline-none">
        </div>

        <div class="space-y-1.5">
            <label class="text-xs font-semibold uppercase tracking-wider text-cyan-400">Unit Kerja Operasional</label>
            <select id="group_name" name="group_name" required class="w-full input-marine rounded-xl px-4 py-3 text-sm mono text-cyan-300 bg-slate-950/90 border border-cyan-500/30 focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400/40 outline-none">
                <option value="">Pilih Unit Kerja...</option>
                <option value="tambak">Tambak</option>
                <option value="shipping">Shipping</option>
                <option value="retail">Retail</option>
                <option value="all">Semua Unit (All Access)</option>
            </select>
        </div>

        <div class="flex items-center justify-between text-xs pt-1">
            <label class="flex items-center gap-2 text-slate-400 cursor-pointer">
                <input id="remember_me" type="checkbox" class="rounded border-cyan-500/40 bg-slate-900 text-cyan-500 focus:ring-cyan-500/20" name="remember">
                <span>Ingat Sesi Ini</span>
            </label>
        </div>

        <button type="submit" class="w-full btn-marine text-white font-orbitron font-bold py-3.5 rounded-xl text-xs uppercase tracking-widest cursor-pointer mt-2">
            Inisiasi Sesi Terminal
        </button>
    </form>
</x-guest-layout>
