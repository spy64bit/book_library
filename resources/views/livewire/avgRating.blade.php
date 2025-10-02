<div class="flex items-center">
    @for ($i = 1; $i <= 5; $i++)
        <i
            class="{{ $i <= round($book->averageRating()) ? 'bi bi-star-fill text-yellow-400' : 'bi bi-star text-gray-400' }}"></i>
    @endfor
    <span class="ml-2 text-sm text-gray-600">
        {{ number_format($book->averageRating(), 1) }} / 5
    </span>
</div>
