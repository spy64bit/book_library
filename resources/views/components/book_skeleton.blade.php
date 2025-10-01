@props(['height' => 'h-70'])

<div {{ $attributes->merge(['class' => 'border p-4 rounded shadow animate-pulse w-55 ' . $height]) }}>
    <div class="h-30 bg-gray-300 rounded mb-4"></div>
    <div class="h-4 bg-gray-300 rounded mb-2"></div>
    <div class="h-3 bg-gray-200 rounded w-2/3 mb-2"></div>
    <div class="h-4 bg-gray-300 rounded mb-2"></div>
    <div class="h-3 bg-gray-200 rounded w-2/3 mb-2"></div>
    <div class="h-4 bg-gray-300 rounded mb-2"></div>
</div>
