<div>
    <button wire:click="toggleFavourite" class="text-xl" onclick="event.preventDefault(); event.stopPropagation();">
        @if ($isFavourited)
            <i class="bi bi-star-fill" style="color: #fbbf24;"></i>
        @else
            <i class="bi bi-star"></i>
        @endif

    </button>
</div>
