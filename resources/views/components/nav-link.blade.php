@props(['active' => false, 'icon' => 'bi bi-grid'])

@php
    $classes = ($active ?? false)
                ? 'nav-link'
                : 'nav-link collapsed';
@endphp

<li class="nav-item">
    <a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
        <i class="{{ $icon }}"></i>
        <span>{{ $slot }}</span>
    </a>
</li>
