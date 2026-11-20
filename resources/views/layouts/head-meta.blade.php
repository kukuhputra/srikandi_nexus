@php
    $pageMeta = config('page-meta.' . str_replace('.', '\.', '/' . trim(request()->path(), '/')));
    $metaTitle = $pageMeta['title'] ?? 'Nexus Dashboard | Srikandi';
    $metaDescription = $pageMeta['description'] ?? 'This is ' . ($title ?? 'Dashboard') . ' page for Srikandi Nexus Unified Enterprise & Telemetry Platform';
@endphp
<title>{{ $metaTitle }}</title>
<meta name="description" content="{{ $metaDescription }}">
