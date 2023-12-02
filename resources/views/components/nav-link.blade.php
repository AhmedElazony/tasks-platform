@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 text-sm font-medium rounded-md leading-5 text-gray-900 focus:outline-none bg-white focus:text-gray-900 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 rounded-md  border-transparent text-sm font-medium leading-5 text-white hover:text-gray-900 hover:bg-white focus:outline-none  transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
