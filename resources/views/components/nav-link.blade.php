@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block px-4 py-2 mt-4 mb-4 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg hover:text-white-900 focus:text-white-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline'
            : 'text-transparent ml-4 bg-clip-text bg-gradient-to-r from-red-600 to-orange-600 hover:text-red-400';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
