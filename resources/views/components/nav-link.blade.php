@props([
    'href',
    'active' => false,
    ])
    <a href="{{$href}}"
    {{ $attributes->merge(['class' => $active ? 'text-blue-600 font-semibold underline' : 'text-gray-700']) }}>
    {{ $slot }}

</a>