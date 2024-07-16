@props(['active' => false, 'id'])

@php
    $linkClasses = ($active ?? false)
                ? 'nav-link'
                : 'nav-link collapsed';

    $dropdownClasses = ($active ?? false)
                ? 'nav-content '
                : 'nav-content collapse';
@endphp

<li class="nav-item">
    <a class="{{ $linkClasses }}" data-bs-target="#{{ $id }}" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i>
        <span>{{ $slot }}</span>
        <i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="{{ $id }}" class="{{ $dropdownClasses }}" data-bs-parent="#sidebar-nav">
        {{ $dropdownItems }}
    </ul>
</li>
