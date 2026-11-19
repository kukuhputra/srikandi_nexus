<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Srikandi NEXUS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700;900&family=Inter:wght@300;400;500;600&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #020817 0%, #06172f 50%, #020e1a 100%);
            color: #c0d2ec;
            overflow-x: hidden;
        }
        .font-orbitron { font-family: 'Orbitron', sans-serif; }
        .mono { font-family: 'JetBrains Mono', monospace; }
        .marine-card {
            background: rgba(10, 22, 40, 0.85);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 180, 216, 0.25);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.9), inset 0 0 20px rgba(0, 180, 216, 0.05);
            border-radius: 20px;
        }
        .marine-glow {
            text-shadow: 0 0 15px rgba(0, 180, 216, 0.6);
        }
        .input-marine {
            background: rgba(3, 8, 18, 0.9);
            border: 1px solid rgba(0, 180, 216, 0.3);
            color: #00b4d8;
            transition: all 0.3s ease;
        }
        .input-marine:focus {
            border-color: #00b4d8;
            box-shadow: 0 0 15px rgba(0, 180, 216, 0.4);
            outline: none;
        }
        .btn-marine {
            background: linear-gradient(135deg, #0077b6 0%, #03045e 100%);
            border: 1px solid rgba(0, 180, 216, 0.4);
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(0, 119, 182, 0.4);
        }
        .btn-marine:hover {
            background: linear-gradient(135deg, #00b4d8 0%, #0077b6 100%);
            box-shadow: 0 6px 25px rgba(0, 180, 216, 0.6);
            transform: translateY(-1px);
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen m-0 relative">

    <!-- Ambient Sunset/Ocean Lighting Effects -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div class="absolute -top-40 -right-40 w-[500px] h-[500px] bg-cyan-500/10 rounded-full blur-[120px]"></div>
        <div class="absolute -bottom-40 -left-40 w-[500px] h-[500px] bg-blue-600/10 rounded-full blur-[120px]"></div>
    </div>

    <!-- Main Container -->
    <div class="w-full max-w-lg px-4 relative z-10 space-y-6">
        <div class="marine-card p-8 sm:p-10 space-y-6">
            <div class="text-center space-y-2">
                <h1 class="text-3xl font-black font-orbitron text-white tracking-wider marine-glow">SRIKANDI NEXUS</h1>
                <p class="text-xs text-slate-400">Unified Enterprise & Telemetry Platform</p>
            </div>

            {{ $slot }}

            <div class="pt-4 border-t border-cyan-500/10 flex items-center justify-between text-[10px] text-slate-400 mono">
                <span>SYS.NODE: CT104_88.14 (PG17)</span>
                <span class="text-cyan-400">● SECURE SSL ONLINE</span>
            </div>
        </div>
    </div>

</body>
</html>
