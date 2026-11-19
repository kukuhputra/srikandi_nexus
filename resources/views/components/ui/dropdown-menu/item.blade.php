@use('App\Support\TwMerge')
@props(['variant' => 'default', 'inset' => false, 'to' => null, 'disabled' => false])
@php
    $classes = TwMerge::merge('group/dropdown-menu-item relative flex cursor-pointer items-center gap-3 rounded-lg px-3 py-2.5 text-start text-sm font-medium text-gray-700 outline-hidden transition-colors duration-200 select-none hover:bg-gray-100 hover:text-gray-700 focus:bg-gray-100 focus:text-gray-700 data-disabled:pointer-events-none data-disabled:opacity-50 data-highlighted:bg-gray-100 data-highlighted:text-gray-700 data-inset:ps-8 data-[variant=destructive]:text-red-500 data-[variant=destructive]:hover:bg-red-50 data-[variant=destructive]:hover:text-red-600 data-[variant=destructive]:focus:bg-red-50 data-[variant=destructive]:focus:text-red-600 data-[variant=destructive]:data-highlighted:bg-red-50 data-[variant=destructive]:data-highlighted:text-red-600 [&_svg]:pointer-events-none [&_svg]:shrink-0 [&_svg]:text-gray-500 group-hover/dropdown-menu-item:[&_svg]:text-gray-700 data-highlighted:[&_svg]:text-gray-700 [&_svg:not([class*=size-])]:size-5 data-[variant=destructive]:*:[svg]:text-red-500', $attributes->get('class'));
    $tag = $to ? 'a' : 'div';
@endphp
<{{ $tag }} role="menuitem" tabindex="-1" data-orientation="vertical" data-slot="dropdown-menu-item" data-variant="{{ $variant }}"
    @if ($inset) data-inset="" @endif @if ($disabled) data-disabled="" aria-disabled="true" @endif @if ($to) href="{{ $to }}" @endif
    x-on:pointermove="highlight($el)" x-on:pointerleave="highlight(null)" x-on:click="closeAll()"
    {{ $attributes->except('class') }} class="{{ $classes }}">{{ $slot }}</{{ $tag }}>
