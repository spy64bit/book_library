<div class="flex space-x-1">
    @for ($i = 1; $i <= 5; $i++)
        <button type="button" wire:click="setRating({{ $i }})" class="text-2xl focus:outline-none">

            @if ($rating >= $i)
                <i class="bi bi-star-fill text-yellow-400"></i>
            @else
                <i class="bi bi-star text-gray-400"></i>
            @endif
        </button>
    @endfor
</div>
