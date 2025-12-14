@props(['variant' => 'primary'])

@php
    $baseClass = "px-6 py-3 rounded-lg font-semibold transition duration-300 ease-in-out transform text-sm md:text-base";
    
  $variants = [
    'primary' => "bg-custom-gold text-white shadow-sm hover:bg-yellow-700 hover:shadow-lg hover:scale-105 hover:-translate-y-1",
    'outline' => "bg-transparent border-2 border-custom-gold text-custom-gold hover:bg-custom-gold hover:text-white hover:shadow-lg hover:scale-105 hover:-translate-y-1"
];

    $classes = $baseClass . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
    